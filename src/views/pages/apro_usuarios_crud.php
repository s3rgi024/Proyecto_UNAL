<?php
include("../../../config/db_connection.php"); 
$consulta = "SELECT id_usuario, nombre1, nombre2, apellido1, apellido2, usuario FROM usuarios";
$sql = $db_connection->query($consulta);
// Recepción de los datos enviados mediante POST desde el JS   

$id_usuario = (isset($_POST['id_usuario'])) ? $_POST['id_usuario'] : '';
$nombre1 = (isset($_POST['nombre1'])) ? $_POST['nombre1'] : '';
$nombre2 = (isset($_POST['nombre2'])) ? $_POST['nombre2'] : '';
$apellido1 = (isset($_POST['apellido1'])) ? $_POST['apellido1'] : '';
$apellido2 = (isset($_POST['apellido2'])) ? $_POST['apellido2'] : '';
$id_usuario = (isset($_POST['id_usuario'])) ? $_POST['id_usuario'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO usuarios (t_doc, id_usuario, nombre1, nombre2, apellido1, apellido2, id_rol, usuario, clave, correo, id_estado) VALUES('$t_doc', '$id_usuario', '$nombre1', '$nombre2'), '$apellido1', '$apellido2', '$id_rol', '$usuario', '$clave', '$correo', '$id_estado'";			
        $resultado = $sql->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id_usuario, nombre1, nombre2, apellido1, apellido2, usuario FROM usuarios ORDER BY id_usuario DESC LIMIT 1";
        $resultado = $sql->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE usuarios SET nombre1='$nombre1', nombre2='$nombre2', apellido1='$apellido1', apellido2='$apellido2', usuario='$usuario' WHERE id_usuario='$id_usuario' ";		
        $resultado = $sql->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id_usuario, nombre1, nombre2, apellido1, apellido2, usuario FROM usuarios WHERE id_usuario='$id_usuario' ";       
        $resultado = $sql->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM usuarios WHERE id_estado='$id_estado' ";		
        $resultado = $sql->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$sql = NULL;
