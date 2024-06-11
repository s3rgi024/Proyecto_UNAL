<?php

$host = "localhost";
$user = "root"; 
$pass = ""; 
$database = "unal";


$db_connection = new mysqli($host, $user, $pass, $database);


$db_connection->set_charset("utf8");
$sql_time = "SET time_zone = '-05:00'";
mysqli_query($db_connection, $sql_time);

if ($db_connection->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}