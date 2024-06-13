<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("../../../config/db_connection.php");

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

    // Actualiza los datos en la base de datos
    $sql = "UPDATE usuarios 
            SET id_tdoc='$id_tdoc', id_usuario='$id_usuario', nombre1='$nombre1', nombre2='$nombre2', apellido1='$apellido1', apellido2='$apellido2', id_rol='$id_rol', correo='$correo', telefono='$telefono', usuario='$usuario', clave='$clave', id_estado='$id_estado'";

    $sql .= " WHERE id_usuario='$id_usuario'";

    if ($db_connection->query($sql) === TRUE) {
        header("location:../");
    } else {
        echo "Error al actualizar el registro: " . $db_connection->error;
    }
}
