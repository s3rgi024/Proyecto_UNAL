<?php 

require '../../../controllers/security.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../public/css/pages/users_module/main_users.css">
    <title>Gestión Usuarios</title>
</head>
<body>

    <?php 
    
        include("../../components/navbar.php");
    
    ?>
    
    <main class="users__main_menu_container min-main">

        <?php
            include("../../components/header.php");
        ?>
        
        <section class="main_content">

            <div class="users_menu__background">
                <div class="square"></div>
                <div class="circle"></div>
                <div class="circle2"></div>
                <div class="bar"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
                <div class="bar4"></div>
            </div>
            
            <div class="users_menu__text">
                <h1>
                    Sección de usuarios
                </h1>
                <p>
                    Desde este punto, se gestionarán todos los aspectos relacionados con los perfiles, roles y datos de los usuarios 
                    que pertenecen al sistema.
                </p>
                <p>
                    Seleccione una opción a continuación:
                </p>
            </div>
            
            <div class="users_menu__buttons">
                <a href="./users_management.php" class="users_ctn">
                    <button class="menu_btn users btn_3d">
                        <div class="btn_front">
                            <span class="tooltip_container more_info_btn">
                                <i class="fa-solid fa-circle-question"></i>
                                <span class="tooltip_text">
                                    Más información
                                </span>
                            </span>

                            <i class="fa-solid fa-users-gear btn_logo"></i>

                            <span class="btn_text">
                                Gestión de usuarios
                            </span>
                        </div>

                        <div class="btn_back">
                            <span class="tooltip_container back_btn">
                            <i class="fa-solid fa-circle-chevron-left"></i>
                                <span class="tooltip_text">
                                    Regresar
                                </span>
                            </span>
                            <span class="back_title">Gestión de Usuarios</span>
                            <p class="back_text">
                                Le permite administrar perfiles, aprobar registros, 
                                inactivar usuarios y personalizar la visualización de sus datos.
                            </p>
                        </div>
                        <span class="circle"></span>
                    </button>
                </a>
                
                <a href="#" class="security_ctn">
                    <button class="menu_btn security btn_3d">
                        <div class="btn_front">
                            <span class="tooltip_container more_info_btn">
                                <i class="fa-solid fa-circle-question"></i>
                                <span class="tooltip_text">
                                    Más información
                                </span>
                            </span>

                            <i class="fa-solid fa-shield-halved btn_logo"></i>

                            <span class="btn_text">
                                Seguridad y Permisos
                            </span>
                        </div>

                        <div class="btn_back">
                            <span class="tooltip_container back_btn">
                            <i class="fa-solid fa-circle-chevron-left"></i>
                                <span class="tooltip_text">
                                    Regresar
                                </span>
                            </span>
                            <span class="back_title">Seguridad y Permisos</span>
                            <p class="back_text">
                                Permite gestionar roles y accesos, definir niveles de 
                                autorización y restringir funciones según el perfil del usuario.
                            </p>
                        </div>

                        <span class="circle"></span>
                    </button>
                </a>
        
                <a href="#" class="monitoring_ctn">
                    <button class="menu_btn monitoring btn_3d">
                        <div class="btn_front">
                            <span class="tooltip_container more_info_btn">
                                <i class="fa-solid fa-circle-question"></i>
                                <span class="tooltip_text">
                                    Más información
                                </span>
                            </span>

                            <i class="fa-solid fa-chart-column btn_logo"></i>

                            <span class="btn_text">
                                Monitoreo
                            </span>
                        </div>

                        <div class="btn_back">
                        <span class="tooltip_container back_btn">
                            <i class="fa-solid fa-circle-chevron-left"></i>
                                <span class="tooltip_text">
                                    Regresar
                                </span>
                            </span>
                            <span class="back_title">Monitoreo</span>
                            <p class="back_text">
                                Permite ver el registro de actividades de los usuarios
                                 y auditar accesos y acciones dentro del sistema.
                            </p>
                        </div>

                        <span class="circle"></span> 
                    </button>
                </a>
            </div>
        </section>    

        <footer class="footer_logo">
            <img src="/public/img/logo_FCE_negro.webp" alt="Logo de la facultad de ciencias económicas">
        </footer>
    </main>

    <script type="module" src="/public/js/pages/users_module/users_main_menu.js"></script>
    
</body>
</html>