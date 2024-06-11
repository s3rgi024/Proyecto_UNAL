<?php
/*
ini_set('display_errors', 1);
error_reporting(E_ALL);
*/


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("../../../config/db_connection.php");
    $tbl_usuarios = "usuarios";


    $id_tdoc = trim($_POST['id_tdoc']);
    $id_usuario = trim($_POST['id_usuario']);
    $nombre1 = trim($_POST['nombre1']);
    $apellido1 = trim($_POST['apellido1']);
    $id_rol = trim($_POST['id_rol']);
    $correo = trim($_POST['correo']);
    $telefono = trim($_POST['telefono']);

    $dirLocal = "fotos_empleados";

    if (isset($_FILES['avatar'])) {
        $archivoTemporal = $_FILES['avatar']['tmp_name'];
        $nombreArchivo = $_FILES['avatar']['name'];

        $extension = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));

        // Generar un nombre único y seguro para el archivo
        $nombreArchivo = substr(md5(uniqid(rand())), 0, 10) . "." . $extension;
        $rutaDestino = $dirLocal . '/' . $nombreArchivo;

        // Mover el archivo a la ubicación deseada
        if (move_uploaded_file($archivoTemporal, $rutaDestino)) {

            $sql = "INSERT INTO $tbl_empleados (id_tdoc, id_usuario, nombre1, apellido1, id_rol, correo, telefono) 
            VALUES ('$id_tdoc', '$id_usuario', '$nombre1', '$apellido1', '$id_rol', '$correo', '$telefono')";

            if ($db_connection->query($sql) === TRUE) {
                header("location:../../../src/views/pages/info_usuarios.php");
            } else {
                echo "Error al crear el registro: " . $db_connection->error;
            }
        } else {
            echo json_encode(array('error' => 'Error al mover el archivo'));
        }
    } else {
        echo json_encode(array('error' => 'No se ha enviado ningún archivo o ha ocurrido un error al cargar el archivo'));
    }
}

/**
 * Función para obtener todos los empleados 
 */

function obtenerEmpleados($db_connection)
{
    $sql = "SELECT * FROM usuarios";
    $resultado = $db_connection->query($sql);
    if (!$resultado) {
        return false;
    }
    return $resultado;
}
