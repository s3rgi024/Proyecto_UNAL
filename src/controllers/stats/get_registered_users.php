<?php

require '../../../config/db_connection.php';

$intervalo = isset($_POST['intervalo']) ? $_POST['intervalo'] : 'mes';
$id_rol = isset($_POST['id_rol']) ? intval($_POST['id_rol']) : 1;
$fecha_inicio = isset($_POST['fecha_inicio']) ? $_POST['fecha_inicio'] : null;
$fecha_fin = isset($_POST['fecha_fin']) ? $_POST['fecha_fin'] : null;

function getUsersByTime($db_connection, $id_rol, $intervalo = 'mes', $fecha_inicio = null, $fecha_fin = null) {
    // Determinar el formato de la fecha según el intervalo
    switch ($intervalo) {
        case 'dia':
            $formato_fecha_sql = '%Y-%m-%d'; // Formato por día
            break;
        case 'mes':
            $formato_fecha_sql = '%Y-%m'; // Formato por mes
            break;
        case 'ano':
            $formato_fecha_sql = '%Y'; // Formato por año
            break;
        default:
            $formato_fecha_sql = '%Y-%m'; // Por defecto, agrupamos por mes
    }

    // Preparar la consulta SQL con el formato adecuado
    $sql = "SELECT
        DATE_FORMAT(fecha_ingreso, ?) AS tiempo_ingreso,
        COUNT(*) AS total
        FROM
        usuarios
        WHERE
        id_rol = ?
        AND fecha_ingreso BETWEEN ? AND ?
        GROUP BY
        tiempo_ingreso
        ORDER BY
        tiempo_ingreso ASC;";

    // Preparar la sentencia
    $stmt = $db_connection->prepare($sql);
    $stmt->bind_param("siss", $formato_fecha_sql, $id_rol, $fecha_inicio, $fecha_fin); // 'siss' indica el tipo de parámetros

    $stmt->execute();
    $result = $stmt->get_result();

    // Inicializar arrays para los intervalos de tiempo y totales
    $tiempo = [];
    $total = [];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $tiempo[] = $row['tiempo_ingreso']; // Retornar directamente la fecha formateada
            $total[] = $row['total'];
        }
    }

    // Cerrar la sentencia
    $stmt->close();

    // Devolver los datos como JSON
    return json_encode(['tiempo' => $tiempo, 'total' => $total]);
}

// Llamar a la función con las fechas
echo getUsersByTime($db_connection, $id_rol, $intervalo, $fecha_inicio, $fecha_fin);

$db_connection->close();
