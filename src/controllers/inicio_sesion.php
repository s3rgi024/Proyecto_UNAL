<?php

$userName = $_POST["userName"];
$clave = $_POST["password"];


            include '../../config/db_connection.php';
            

            //Consuita de usuarios

            $consulta="SELECT * FROM usuarios WHERE usuario ='$userName'";
            $sql = $db_connection->query($consulta);
            $usuario_cons = $sql->fetch_assoc();
            
            $documento = $usuario_cons['id_usuario'];
            $clave_bd = $usuario_cons['clave'];
            $nombre = $usuario_cons['nombre1'];
            $apellido = $usuario_cons['apellido1'];
            $id_rol = $usuario_cons['id_rol'];
            $estado = $usuario_cons['id_estado'];

            //Consulta de roles

            $consulta2 = "SELECT * FROM roles WHERE id_rol = '$id_rol'";
            $sql2 = $db_connection->query($consulta2);
            $cons_rol = $sql2->fetch_assoc();

            $rol = $cons_rol['rol'];
            $id_rol = $cons_rol['id_rol'];


            if ($clave === $clave_bd && $estado === "1") {
                
                session_start();
                $_SESSION['id_usuario'] = $documento;
                $_SESSION['nombre'] = $nombre;
                $_SESSION['apellido'] = $apellido;
                $_SESSION['activo'] = true;
                $_SESSION['rol'] = $rol;
                $_SESSION['id_rol'] = $id_rol;

                
                header ("Location: ../views/pages/main.php");

            } else {

                print "<script>alert(\"Error al iniciar sesiòn, revise los campos e intente nuevamente o comuníquese con su administrador.\");window.location='../../index.php';</script>";
                  
            }