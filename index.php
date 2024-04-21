<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/modules/login.css">
    <link rel="stylesheet" href="./node_modules/boxicons/css/boxicons.min.css">
     <title>Iniciar Sesión</title>
</head>
<body>
    
    <?php
        include("./src/views/components/header.php"); 
    ?>

    <main class="container__login">
        <div class="blur"></div>

        <section class="login__form" id="login__form">
            <h1>
                Iniciar sesión
            </h1>
            <form action="">      
                <div class="login__form-fields">
                    <label for="userName">Nombre de Usuario</label>
                   <div>
                        <label for="userName"><i class='bx bx-user' ></i></label>
                        <div>
                            <input type="text" name="userName" id="userName">
                            <div class="underline"></div>
                        </div>
                   </div>
                </div>
                
                <div class="login__form-fields">
                    <label for="password">Contraseña</label>
                    <div>
                        <label for="password"><i class='bx bx-lock-alt'></i></label>
                        <div>
                            <input type="password" name="password" id="password">
                            <div class="underline"></div>
                        </div>
                    </div>
                    <div class="login__form-forget-password-link">
                        <div>
                            <a href="">Olvidé mi contraseña</a>
                        </div>
                    </div>
                </div>

                <div class="login__form-btn">
                    <button type="submit">
                        <a style="text-decoration: none; color: inherit;" href="./src/views/pages/main.php">
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
            <form action="">
                <div class="register__form-fields">
                    <label for="userName">Tipo y número de documento</label>
                   <div>
                        <div>
                                <div>
                                    <select name="t_doc" id="t_doc">
                                        <option value="C.C">C.C</option>
                                        <option value="C.E">C.E</option>
                                    </select>
                                </div>
                        </div>
                        <div>
                                <div>
                                    <input type="number" name="userName" id="userName">
                                    <div class="underline"></div>
                                </div>
                        </div>
                   </div>
                </div>   

                <div class="register__form-fields">
                    <label for="password">Correo</label>
                    <div>
                        <label for="password"><i class='bx bx-envelope'></i></label>
                        <div>
                            <input type="password" name="password" id="password">
                            <div class="underline"></div>
                        </div>
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