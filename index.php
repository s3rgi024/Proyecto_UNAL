<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/login.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    
    <?php
        include("./src/views/components/header.php");
        include ("./config/db_connection.php");
    ?>

    <main class="container__login">
        <div class="blur"></div>

        <section class="login__form" id="login__form">
            <h1>
                Iniciar sesión
            </h1>
            <form action="./src/controllers/inicio_sesion.php" method="post">      
                <div class="login__form-fields">
                    <label for="userName">Nombre de Usuario</label>
                   <div>
                        <label for="userName"><i class="fa-solid fa-user"></i></label>
                        <div>
                            <input type="text" name="userName" id="userName">
                            <div class="underline"></div>
                        </div>
                   </div>
                </div>
                
                <div class="login__form-fields">
                    <label for="password">Contraseña</label>
                    <div>
                        <label for="password"><i class="fa-solid fa-lock"></i></label>
                        <div>
                            <input type="password" name="password" id="password">
                            <div class="underline"></div>
                        </div>
                    </div>
                    <br>
                    <div class="login__form-forget-password-link">
                        <div>
                            <a href="">Olvidé mi contraseña</a>
                        </div>
                    </div>
                </div>

                <div class="login__form-btn">
                    <button type="submit">
                        <a>
                            Ingresar
                        </a>
                    </button>
                    <span>
                        ¿No  tienes una cuenta?
                        <span><a id="register_link">Registrate</a></span>
                    </span>
                </div>
            </form>
        </section>

        <section class="register__form" id="register__form">
            <h1>
                Regístrate
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

                <div class="register__form_tdata">
                    <div>
                        <input type="checkbox" name="trat_datos" id="trat_datos" class="trat_datos" required>
                        <span>
                            He leído y acepto la Política de Tratamiento de Datos
                        </span>

                    </div>
                </div>

                <div class="register__form-btn">
                    <button type="submit">
                        Solicitar Usuario
                    </button>
                    <span>
                        ¿Ya tienes una cuenta?
                        <span><a id="login_link">Inicia Sesión</a></span>
                    </span>
                    <span class="professor_link">
                        ¿Eres docente? Regístrate
                        <span><a href="">aquí</a></span>
                    </span>
                </div>
            </form>
        </section>
    </main>
    

    <?php
        include("./src/views/components/footer.php"); 
    ?>

    <script src="./public/js/login.js"></script>
</body>
</html>