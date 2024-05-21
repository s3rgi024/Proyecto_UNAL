<?php
include("../../../config/db_connection.php"); 
$consulta = "SELECT id_tdoc, id_usuario, nombre1, nombre2, apellido1, apellido2, id_rol, usuario, clave, correo, telefono, id_estado FROM usuarios";
$sql = $db_connection->query($consulta);
// Recepción de los datos enviados mediante POST desde el JS   

$id_usuario = (isset($_POST['id_tdoc'])) ? $_POST['id_tdoc'] : '';
$nombre1 = (isset($_POST['id_usuario'])) ? $_POST['id_usuario'] : '';
$nombre2 = (isset($_POST['nombre1'])) ? $_POST['nombre1'] : '';
$nombre2 = (isset($_POST['nombre2'])) ? $_POST['nombre2'] : '';
$apellido1 = (isset($_POST['apellido1'])) ? $_POST['apellido1'] : '';
$apellido2 = (isset($_POST['apellido2'])) ? $_POST['apellido2'] : '';
$id_usuario = (isset($_POST['id_rol'])) ? $_POST['id_rol'] : '';
$id_usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$id_usuario = (isset($_POST['clave'])) ? $_POST['clave'] : '';
$id_usuario = (isset($_POST['correo'])) ? $_POST['correo'] : '';
$id_usuario = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$id_usuario = (isset($_POST['id_estado'])) ? $_POST['id_estado'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO usuarios (id_tdoc, id_usuario, nombre1, nombre2, apellido1, apellido2, id_rol, usuario, clave, correo, telefono, id_estado) VALUES('$id_tdoc', '$id_usuario', '$nombre1', '$nombre2', '$apellido1', '$apellido2', '$id_rol', '$usuario', '$clave', '$correo', '$telefono', '$id_estado')";			
        $resultado = $sql->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id_tdoc, id_usuario, nombre1, nombre2, apellido1, apellido2, id_rol, usuario, clave, correo, telefono, id_estado FROM usuarios ORDER BY id_usuario DESC LIMIT 1";
        $resultado = $sql->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE usuarios SET nombre1='$nombre1', nombre2='$nombre2', apellido1='$apellido1', apellido2='$apellido2', usuario='$usuario', id_estado='$id_estado' WHERE id_usuario='$id_usuario' ";		
        $resultado = $sql->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id_tdoc, id_usuario, nombre1, nombre2, apellido1, apellido2, usuario, clave, correo, telefono, id_estado FROM usuarios WHERE id_usuario='$id_usuario'";       
        $resultado = $sql->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM id_usuario WHERE id_usuario='$id_usuario'";		
        $resultado = $sql->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$sql = NULL;
