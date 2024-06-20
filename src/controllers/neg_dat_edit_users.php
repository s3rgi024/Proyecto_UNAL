<?php
session_start();

include ("../../config/db_connection.php");

$id_tdoc = $_POST['id_tdoc'];
$id_usuario = $_POST['id_usuario'];
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$usuario = $_POST['usuario'];
$id_rol = $_POST['id_rol'];
$id_estado = $_POST['id_estado'];

$sql = "UPDATE usuarios SET id_tdoc='$id_tdoc', nombre1='$nombre1', nombre2='$nombre2', apellido1='$apellido1', apellido2='$apellido2', correo='$correo', telefono='$telefono', usuario='$usuario', id_rol='$id_rol', id_estado='$id_estado' WHERE id_usuario=$id_usuario";

if ($db_connection->query($sql) === TRUE) {
    $_SESSION['message'] = "Usuario Actualizado Exitosamente";
} else {
    $_SESSION['error'] = "Error al actualizar registro: " . $db_connection->error;
}

$db_connection->close();

header("Location: ../../src/views/pages/info_usuarios.php");
exit();
?>
