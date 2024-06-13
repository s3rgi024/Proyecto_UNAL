<?php
    include("../../../config/db_connection.php");
    $id_usuario = $_GET['id_usuario'];

// Consultar la base de datos para obtener los detalles del usuario
$sql = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario";
$query = $db_connection->query($sql);
$usuario = $query->fetch_assoc();

// Devolver los detalles del usuario como un objeto JSON
header('Content-type: application/json; charset=utf-8');
echo json_encode($usuario);
exit;
