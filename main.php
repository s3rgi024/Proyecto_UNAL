<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/homepage/login.css">
    <link rel="stylesheet" href="./public/css/homepage/main.css">
    <script src="https://kit.fontawesome.com/cddf3df688.js" crossorigin="anonymous"></script>
    <title>Inicio</title>
</head>
<body>
    <!-- <header class="header">
        <div class="header__logo-unal">
            <img src="./public/img/logo_unal_blanco.webp" 
            alt="logo Universidad Nacional de Colombia">
        </div>
        
        <div class="header__logo-fce">
            <img src="./public/img/logo_FCE_blanco.webp" alt="Logo Facultad de Ciencias Económicas">
        </div>
    </header> -->

    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina">
                <ion-icon id="cloud" name="business-outline"></ion-icon>
                <span>FCE</span>
            </div>
            <button class="boton">
                <ion-icon name="log-out-outline"></ion-icon>
                <span>Cerrar Sesión</span>
            </button>
        </div>

        <nav class="navegacion">
            <ul>
                <li>
                    <a id="inbox" href="#">
                        <ion-icon name="home-outline"></ion-icon>
                        <span>Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="grid-outline"></ion-icon>
                        <span>Salones</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="person-add-outline"></ion-icon>
                        <span>Contratación</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Reportes</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="settings-outline"></ion-icon>
                        <span>Mantenimiento</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="layers-outline"></ion-icon>
                        <span>Historial</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="information-circle-outline"></ion-icon>
                        <span>Información</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div>
            <div class="linea"></div>
    
            <div class="usuario">
                <img src="./public/img/escudounal.svg" alt="">
                <div class="info-usuario">
                    <div class="nombre-email">
                        <span class="nombre">Rol</span>
                        <span class="email">Usuario</span>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <main>
    </main>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./public/javascript/main.js"></script>

    <!-- <footer>
        <section class="container__footer__social_media">
            <div class="footer__social_media_img">
                <img src="./public/img/logo_FCE_blanco.webp" alt="Logo Facultad de Ciencias Económicas">
            </div>
            <ul class="footer__social_media">
                <li>
                    <a href="https://web.facebook.com/fceunal">
                        <i class="fa-brands fa-facebook f"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/bienestarfceun">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="https://x.com/fceunal">
                        <i class="fa-brands fa-square-x-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/fce-unal-bogota/">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="https://youtube.com/@prensacid">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </section>
        <section class="container__footer__contact">
            <h3>Contáctanos</h3>
            <form action="">
                <input type="email" placeholder="Correo" class="container__footer__contact_email">
                <input type="text" placeholder="PQRS" class="container__footer__contact_pqrs">
            </form>
        </section>
    </footer> -->
</body>
</html>