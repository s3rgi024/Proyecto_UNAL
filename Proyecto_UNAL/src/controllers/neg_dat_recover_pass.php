<?php 

function recoverPass(){
    // Habilitar informes de errores para depuración
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $email = $_POST['email'];
    $t_dni = $_POST['t_dni'];
    $dni = $_POST['dni'];

    include ("../../config/db_connection.php");

    $query = "SELECT * FROM usuarios WHERE id_usuario = '$dni' AND id_tdoc = '$t_dni' AND correo = '$email'";
    $sql = $db_connection->query($query);
    if ($sql === false) {
        echo json_encode(['status' => 'error', 'message' => 'Error en la consulta SQL']);
        return;
    }
    $userInfo = $sql->fetch_assoc();
    
    if ($userInfo) {
        $name = stripslashes($userInfo["nombre1"]) . " " . stripslashes($userInfo["apellido1"]);
        $newPass = newPassword(12);
        if ($newPass === false) {
            echo json_encode(['status' => 'error', 'message' => 'Error al generar nueva contraseña']);
            return;
        }

        $passEncryp = password_hash($newPass, PASSWORD_BCRYPT);
        if ($passEncryp === false) {
            echo json_encode(['status' => 'error', 'message' => 'Error al encriptar la nueva contraseña']);
            return;
        }

        $update_query = "UPDATE usuarios SET clave='$passEncryp' WHERE id_usuario = '$dni'";
        $update_result = $db_connection->query($update_query);
        if ($update_result === false) {
            echo json_encode(['status' => 'error', 'message' => 'Error al actualizar la contraseña en la base de datos']);
            return;
        }

        if (sendEmail($email, $name, $newPass)) {
            echo json_encode(['status' => 'success', 'message' => 'Correo enviado correctamente']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error al enviar el correo']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Usuario no encontrado']);
    }
}

function newPassword($length = 12) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
    $charactersLength = strlen($characters);
    $randomString = '';
    
    try {
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = random_int(0, $charactersLength - 1);
            $randomString .= $characters[$randomIndex];
        }
    } catch (Exception $e) {
        return false;
    }
    
    return $randomString;
}

function sendEmail($email, $name, $newPass){
    $to = $email;
    $subject = "Recuperación de contraseña exitosa - ESCADMCP FCE UNAL";
    $message = "
    Estimado/a $name,
                
    Nos complace informarte que se ha procesado tu solicitud de cambio de contraseña en nuestro sistema. 
    Tu nueva contraseña es: $newPass               
    Una vez inicies sesión con la nueva contraseña no dudes en actualizarla por seguridad 😉. 
    Si tienes algún problema para iniciar sesión en nuestro sistema, no dudes en ponerte en contacto con el servicio técnico.
    Gracias por utilizar nuestros servicios.

    Puedes ir al sistema rápidamente dando click en el siguiente enlace: ____
                
    Atentamente, Escuela de Administración y Contaduría Pública - FCE - Universidad Nacional de Colombia, sede Bogotá.";
    $headers = "From: sergioechaparro@gmail.com" . "\r\n" .
               "Reply-To: sergioechaparro@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    return @mail($to, $subject, $message, $headers);
}

// Llamar a la función recoverPass si hay datos POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    recoverPass();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método de solicitud no permitido']);
}
