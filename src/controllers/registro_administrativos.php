<?php
    class usuario{
        public function insertar ($tdoc, $doc, $mail){

            include ("../../config/db_connection.php");

                if( $tdoc && $doc && $mail) {
                    
                    mysqli_query($db_connection, "INSERT INTO usuarios (id_tdoc, id_usuario, correo, id_estado) 
                    VALUES ('$tdoc', '$doc', '$mail', 2)");
                        
                } else{
                    print "<script>alert(\"Error al insertar datos, revise los campos e intente nuevamente.\");window.location='../pres/pres_usuarios.php';</script>";
                }
        }
    }

    $nuevo = new usuario();
    $nuevo -> insertar($_POST["t_doc"], $_POST["dni"], $_POST["reg_email"]);