<?php

require '../../../config/db_connection.php';

$intervalo = isset($_POST['intervalo']) ? $_POST['intervalo'] : 'mes';
$id_estado = isset($_POST['id_estado']) ? intval($_POST['id_estado']) : 1;
$fecha_inicio = isset($_POST['fecha_inicio']) ? $_POST['fecha_inicio'] : null;
$fecha_fin = isset($_POST['fecha_fin']) ? $_POST['fecha_fin'] : null;

function getDocsByTime($db_connection, $id_estado, $intervalo = 'mes', $fecha_inicio = null, $fecha_fin = null) {
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
        DATE_FORMAT(ultima_actualizacion, ?) AS fecha_documentacion,
        COUNT(*) AS total
        FROM
        archivo_doc_oca
        WHERE
        fk_id_estado_documentacion = ?
        AND ultima_actualizacion BETWEEN ? AND ?
        GROUP BY
        fecha_documentacion
        ORDER BY
        fecha_documentacion ASC;";

    // Preparar la sentencia
    $stmt = $db_connection->prepare($sql);
    $stmt->bind_param("siss", $formato_fecha_sql, $id_estado, $fecha_inicio, $fecha_fin);
    $stmt->execute();
    $result = $stmt->get_result();

    // Inicializar arrays para los intervalos de tiempo y totales
    $tiempo = [];
    $total = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tiempo[] = $row['fecha_documentacion']; // Retornar directamente la fecha formateada
            $total[] = $row['total'];
        }
    }

    // Cerrar la sentencia
    $stmt->close();

    // Devolver los datos como JSON
    return json_encode(['tiempo' => $tiempo, 'total' => $total]);
}

// Llamar a la función con las fechas
echo getDocsByTime($db_connection, $id_estado, $intervalo, $fecha_inicio, $fecha_fin);

$db_connection->close();
