<?php

require_once __DIR__ . "/../../../config/db_connection.php";

function getUsers(){
    $conn = db_connection();
    $sql = "SELECT * FROM usuarios ORDER BY fecha_ingreso DESC";
    $result = $conn->query($sql);

    $usuarios = [];
    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }

    $conn->close();
    return json_encode($usuarios);
}

header(header: 'Content-Type: application/json');
echo getUsers();


getUsers();