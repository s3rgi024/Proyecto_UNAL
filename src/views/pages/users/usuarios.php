<?php 

require '../../../controllers/security.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../public/css/pages/users_module/users_main_menu.css">
    <title>Gestión Usuarios</title>
</head>
<body>

    <?php 
    
        include("../../components/navbar.php");
    
    ?>
    
    <main class="users__main_menu_container min-main">
        
        <section class="main_content">
            <div class="users_menu__background">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <!-- Definir la forma de la ola -->
                        <path id="gentle-wave" d="M-160 44c50 0 40-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>

                    <g class="parallax" transform="rotate(145 75 40)">
                        <!-- Aplicar diferentes colores y transparencias a cada ola -->
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgb(118, 141, 218, 0.795)" />
                        
                        <!-- Azul oscuro, 70% opacidad -->
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(126, 154, 248, 0.904)" /> <!-- Azul medio, 50% opacidad -->
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(169, 186, 243, 0.904)" /> <!-- Azul claro, 30% opacidad -->
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgb(97, 134, 255)" />
                    </g>
                </svg>
            </div>
            
            <div class="users_menu__text">
                <h1>
                    Bienvenido a la sección de usuarios
                </h1>
                <p>
                    Desde este punto, se gestionarán todos los aspectos relacionados con los perfiles, roles y datos de los usuarios que pertenecen a la Facultad.
                </p>
                <br>
                <p>
                    Seleccione una opción a continuación:
                </p>
                <br>
            </div>
            <div class="users_menu__buttons">
                a
            </div>
        </section>    

        <footer class="footer_logo">
            <img src="../../../../public/img/logo_FCE_negro.webp" alt="Logo de la facultad de ciencias económicas">
        </footer>
    </main>

    

    <script src="../../../../public/js/navbar.js"></script>
    <script src="../../../../public/js/pages/users_module/users_main_menu.js"></script>
</body>
</html>