<?php
ob_start(); // Iniciar el buffer de salida

header('Content-Type: application/json'); // Asegurar que la respuesta sea JSON

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("../../../config/db_connection.php");
    $tbl_usuarios = "usuarios";

    $id_tdoc = trim($_POST['id_tdoc']);
    $id_usuario = trim($_POST['id_usuario']);
    $nombre1 = trim($_POST['nombre1']);
    $nombre2 = trim($_POST['nombre2']);
    $apellido1 = trim($_POST['apellido1']);
    $apellido2 = trim($_POST['apellido2']);
    $id_rol = trim($_POST['id_rol']);
    $correo = trim($_POST['correo']);
    $telefono = trim($_POST['telefono']);
    $usuario = trim($_POST['usuario']);
    $clave = trim($_POST['clave']);
    $id_estado = trim($_POST['id_estado']);

    $sql = "INSERT INTO $tbl_usuarios (id_tdoc, id_usuario, nombre1, nombre2, apellido1, apellido2, id_rol, correo, telefono, usuario, clave, id_estado) 
            VALUES ('$id_tdoc', '$id_usuario', '$nombre1', '$nombre2', '$apellido1', '$apellido2', '$id_rol', '$correo', '$telefono', '$usuario', '$clave', '$id_estado')";

    if ($db_connection->query($sql) === TRUE) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Error al crear el registro: ' . $db_connection->error]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Método no permitido']);
}

ob_end_clean(); // Limpiar el buffer de salida

/**
 * Función para obtener todos los empleados 
 */

 function obtenerUsuarios($db_connection)
 {
     $sql = "SELECT * FROM usuarios";
     $resultado = $db_connection->query($sql);
     if (!$resultado) {
         return false;
     }
     return $resultado;
 }