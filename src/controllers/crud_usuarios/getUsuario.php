<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    include("../../../config/db_connection.php");

    // Obtener el ID de usuario de la solicitud GET y asegurarse de que sea un entero
    $id_usuario = (int)$_GET['id_usuario'];

    // Realizar la consulta para obtener los detalles del usuario con el ID proporcionado
    $sql = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario";
    $resultado = $db_connection->query($sql);

    // Verificar si la consulta se ejecutó correctamente
    if (!$resultado) {
        // Manejar el error aquí si la consulta no se ejecuta correctamente
        echo json_encode(["error" => "Error al obtener los detalles del usuario: " . $db_connection->error]);
        exit();
    }

    // Obtener los detalles del usuario como un array asociativo
    $usuario = $resultado->fetch_assoc();

    // Devolver los detalles del usuario como un objeto JSON
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($usuario);
    exit;
}
