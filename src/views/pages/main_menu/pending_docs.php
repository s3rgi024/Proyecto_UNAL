<div class="pending_docs_section">

    <h3>
        <i class="fa-solid fa-address-book"></i> Documentación pendiente
    </h3>

    <div class="pending_docs">
        <ul>
            <?php 
        
            $sql_docs = "
            SELECT *
            FROM archivo_doc_oca 
            WHERE fk_id_estado_documentacion = 3
            ORDER BY ultima_actualizacion DESC";
            $result_docs = $db_connection->query($sql_docs);

            // Generar contenedores HTML para cada resultado
            if ($result_docs->num_rows > 0) {
                while($row = $result_docs->fetch_assoc()) {

                    $user_dni = $row['fk_dni'];

                    $sql_user = "SELECT * FROM usuarios WHERE id_usuario = '$user_dni' AND id_rol = 1 AND id_estado = 1";
                    $result_user = $db_connection->query($sql_user);

                    $fecha_actualizacion = $row['ultima_actualizacion'];
                    $query_user = $result_user->fetch_assoc();
                    

                    ?>
                    
                    <li class="pending_docs_item">
                        <i class="fa-solid fa-file"></i>

                        <div class="user_details">
                            <span><?php echo $query_user["nombre1"] . " " . $query_user["apellido1"]?></span>
                            <span>
                                <?php 
                                
                                $current_date = new DateTime();

                                $register_date = new DateTime($fecha_actualizacion);

                                $diff = $register_date->diff($current_date);

                                // Usar un switch para manejar los casos
                                switch (true) {
                                    case ($diff->days > 0):
                                        echo "Hace " . $diff->days . " días";
                                        break;
                                    case ($diff->h > 0):
                                        echo "Hace " . $diff->h . " horas";
                                        break;
                                    default:
                                        echo "Hace menos de una hora";
                                        break;
                                }
                            
                                ?>
                            </span>
                        </div>

                        <span class="tooltip_container">
                            <i class="fa-solid fa-circle-info"></i>
                            <span class="tooltip_text">
                                Más información
                            </span>
                        </span>
                    </li>

                    <?php
                }
            } else {
                ?>
                    <span class="without_data">No hay documentos por revisar.</span>
                <?php
            }

            ?>
        </ul>

    </div>

</div>