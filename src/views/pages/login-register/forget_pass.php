<section class="register__form" id="register__form">
    <h1>
        Recuperar Contraseña
    </h1>
    <form action="./src/controllers/registro_administrativos.php" method="post">
        <div class="register__form-fields">
            <label for="dni"><i class="fa-regular fa-id-card"></i> Tipo y número de documento</label>
            <div>
                <div class="input_select_container">
                    <select class="t_doc" name="t_doc" id="t_doc">
                        <?php
                                
                            $tdoc_query = "SELECT * FROM tipo_documento";

                            if (!$result = $db_connection -> query($tdoc_query)) {
                                    die ('Error en la consulta! [' . $db_connection -> error . ']');
                            }
                    
                            while ($row = $result -> fetch_assoc()) {
                                $id_tdoc = stripslashes($row["id_tipo_documento"]);
                                $nom_tdoc = stripslashes($row["abreviatura"]);
                                $desc_tdoc = stripslashes($row["documento"]);
                        ?>
                                    
                            <option value="<?php echo $id_tdoc; ?>"><?php echo $nom_tdoc; ?></option>

                        <?php
                            }                      
                        ?>
                    </select>
                    <div class="underline"></div>
                    <div class="icon_select_container">
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                <div>
                    <input type="number" name="dni" id="dni" min="100000" max="9999999999">
                    <div class="underline"></div>
                </div>
            </div>
        </div>   

        <div class="register__form-fields">
            <label for="reg_email"><i class="fa-solid fa-envelope"></i> Correo</label>
                <div>
                    <div>
                        <input type="email" name="reg_email" id="reg_email" class="reg_email">
                    <div class="underline"></div>
                </div>
            </div>
        </div>

        <div class="register__form-btn">
            <button type="submit">
                Enviar Correo de Recuperación
            </button>
            <span>
                ¿Ya tienes una cuenta?
                <span>
                    <a id="login_link">Inicia Sesión</a>
                </span>
            </span>
        </div>
    </form>
</section>