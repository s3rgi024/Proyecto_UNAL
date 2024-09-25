<div class="pending_users_section">
    <h3>
        <i class="fa-solid fa-user-clock"></i> Usuarios pendientes
    </h3>

    <div class="pending_users">
        <ul>

        <?php 
            
                $sql = "SELECT * FROM usuarios WHERE id_rol = 1 AND id_estado = 3 ORDER BY fecha_ingreso DESC";
                $result = $db_connection->query($sql);

                // Generar contenedores HTML para cada resultado
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        ?>
                        
                        <li class="pending_user_item">
                            <i class="fa-solid fa-user"></i>

                            <div class="user_details">
                                <span><?php echo $row["nombre1"] . " " . $row["apellido1"]?></span>
                                <span> 
                                    <?php 
                                
                                    $current_date = new DateTime();

                                    $register_date = new DateTime($row["fecha_ingreso"]);

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
                        <span class="without_data">No hay usuarios pendientes.</span>
                    <?php
                }

            ?>
        </ul>
    </div>
</div>