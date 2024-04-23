<?php

$host = "localhost";
$user = "usuario_mysql"; 
$pass = "contraseña"; 
$database = "nombre_db";

$db_connection = new mysqli($host, $user, $pass, $database);

// Verificar si hay errores en la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa a la base de datos MySQL";
}

// Realizar operaciones con la base de datos...

// Cerrar la conexión
$conexion->close();

