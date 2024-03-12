<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/index.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <header class="header">
        <div class="header__logo-unal">
            <img src="./public/img/logo_unal_blanco.webp" 
            alt="logo Universidad Nacional de Colombia">
        </div>
        <!--<nav class="header__menu">
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Iniciar Sesión</a></li>
            </ul>
        </nav>-->
        <div class="header__logo-fce">
            <img src="./public/img/logo_FCE_blanco.webp" alt="">
        </div>
    </header>

    <main class="container__login">
        <div class="blur"></div>

        <section class="login__form">
            <h1>
                Iniciar sesión
            </h1>
            <form action="">      
                <div class="login__form-fields">
                    <label for="userName">Nombre de Usuario</label>
                    <input type="text" name="userName" id="userName">
                </div>
                
                <div class="login__form-fields">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password">
                    <a href="">Olvidé mi contraseña</a>
                </div>

                <div class="login__form-btn">
                    <button type="submit">
                        Ingresar
                    </button>
                </div>
            </form>
        </section>
    </main>

    <footer>
        <section class="footer__social_media">
            <h3>
                Redes Sociales
            </h3>
            <ul>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
        </section>
        <section class="footer__contact">

        </section>
    </footer>
</body>
</html>