<?php

function loginUser($userName, $password) {
    include '../../config/db_connection.php';

    ini_set('log_errors', 1);
    ini_set('error_log', '../../logs/error.log');

    error_log("Iniciando loginUser");

    $response = ['status' => 'error', 'message' => 'Usuario o contraseña incorrectos'];

    // Validar entradas
    if (empty($userName) || empty($password)) {
        $response['message'] = 'Usuario y contraseña son requeridos';
        echo json_encode($response);
        error_log("Usuario o contraseña vacíos");
        return;
    }

    // Consulta de usuarios
    $consulta = "SELECT * FROM usuarios WHERE usuario = ?";
    if ($stmt = $db_connection->prepare($consulta)) {
        $stmt->bind_param("s", $userName);
        $stmt->execute();
        $result = $stmt->get_result();
        $usuario_cons = $result->fetch_assoc();

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        if ($usuario_cons) {
            $documento = $usuario_cons['id_usuario'];
            $clave_bd = $usuario_cons['clave'];
            $nombre = $usuario_cons['nombre1'];
            $apellido = $usuario_cons['apellido1'];
            $id_rol = $usuario_cons['id_rol'];
            $estado = $usuario_cons['id_estado'];

            error_log("Usuario consultado: " . print_r($usuario_cons, true));
            error_log("Clave ingresada: " . $password);
            error_log("Clave en BD: " . $clave_bd);
            error_log("Resultado de password_verify: " . (password_verify($password, $clave_bd) ? "true" : "false"));
            error_log("Estado del usuario: " . $estado);
            error_log("Comparación de estado: " . ($estado == 1 ? 'true' : 'false'));

            
            error_log ("Hashed password: " . $hashedPassword . "\n");
            error_log ("Stored password: " . $clave_bd . "\n");
            error_log ("Passwords match: " . (password_verify($clave_bd, $hashedPassword) ? "true" : "false") . "\n");


            $consulta2 = "SELECT * FROM roles WHERE id_rol = ?";
            if ($stmt2 = $db_connection->prepare($consulta2)) {
                $stmt2->bind_param("i", $id_rol);
                $stmt2->execute();
                $result2 = $stmt2->get_result();
                $cons_rol = $result2->fetch_assoc();

                $rol = $cons_rol['rol'];
                $id_rol = $cons_rol['id_rol'];

                if (password_verify($password, $clave_bd) && $estado == 1) {
                    session_start();
                    $_SESSION['id_usuario'] = $documento; 
                    $_SESSION['nombre'] = $nombre;
                    $_SESSION['apellido'] = $apellido;
                    $_SESSION['activo'] = true;
                    $_SESSION['rol'] = $rol;
                    $_SESSION['id_rol'] = $id_rol;

                    $response['status'] = 'success';
                    error_log("Inicio de sesión exitoso para el usuario: $userName");
                } else if($estado == 2){
                    $response['message'] = 'Usuario inactivo';
                    error_log("El usuario $userName está inactivo");
                } else {
                    $response['message'] = 'Credenciales incorrectas';
                    error_log("Credenciales incorrectas para el usuario: $userName");
                }
            } else {
                $response['message'] = 'Error al preparar la consulta de roles';
                error_log("Error al preparar la consulta de roles");
            }
            $stmt2->close();
        } else {
            $response['message'] = 'Usuario no encontrado';
            error_log("Usuario no encontrado: $userName");
        }
        $stmt->close();
    } else {
        $response['message'] = 'Error al preparar la consulta de usuarios';
        error_log("Error al preparar la consulta de usuarios");
    }

    echo json_encode($response);
    $db_connection->close();
}

loginUser($_POST["userName"], $_POST["password"]);
