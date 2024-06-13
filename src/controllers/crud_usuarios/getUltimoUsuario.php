<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    include("../../../config/db_connection.php");

    // Realizar la consulta para obtener los detalles del usuario con el ID proporcionado
    $sql = "SELECT * FROM usuarios ORDER BY id_usuario";
    $resultado = $db_connection->query($sql);

    // Verificar si la consulta se ejecutó correctamente
    if (!$resultado) {
        echo json_encode(["error" => "Error al obtener los detalles del usuario: " . $db_connection->error]);
        exit();
    }

    // Obtener los detalles del ultimo usuario registrado, como un array asociativo
    $usuario = $resultado->fetch_assoc();

    // Devolver los detalles del usuario como un objeto JSON
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($usuario);
    exit;
}
