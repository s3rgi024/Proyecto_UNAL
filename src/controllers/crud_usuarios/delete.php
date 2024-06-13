<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("../../../config/db_connection.php");

    // Leer el cuerpo de la solicitud JSON
    $json_data = file_get_contents("php://input");
    // Decodificar los datos JSON en un array asociativo
    $data = json_decode($json_data, true);

    // Verificar si los datos se decodificaron correctamente
    if ($data !== null) {
        $id_usuario = $data['id_usuario'];

        $sql = "UPDATE usuarios SET id_estado=2 WHERE id_usuario=$id_usuario";
        if ($db_connection->query($sql) === TRUE) {
            echo json_encode(array("success" => true, "message" => "Usuario deshabilitado correctamente"));
        } else {
            echo json_encode(array("success" => false, "message" => "Error al actualizar el estado del usuario"));
        }
    } else {
        echo json_encode(array("success" => false, "message" => "Los datos no se proporcionaron correctamente"));
    }
}
