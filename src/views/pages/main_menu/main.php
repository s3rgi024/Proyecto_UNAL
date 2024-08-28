<?php 

   require '../../../controllers/security.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../public/css/pages/main_menu/main.css">
    <title>Menú Principal</title>
</head>
<body>

    <?php
        include "../../components/navbar.php";
    ?>

    <main class="main_content min-main">

        <section class="main_container">
            <div class="user_section">
                <h2>Bienvenido <?php echo $nombre; ?> </h2>
                <p>Rol: <?php echo $rol; ?></p>
            </div>

            <div class="user_settings_section">
                <div class="datetime">
                    <p>28 de abril de 2024</p>
                    <p><?php echo date('H:i'); ?></p>
                </div>

                <button class="notifications">
                    <i class="fa-solid fa-bell"></i>
                </button>
                
                <button class="settings">
                    <i class="fa-solid fa-gear"></i>
                </button>
            </div>
            
            <div class="management_section">
                <h3>
                    <i class="fa-solid fa-house-chimney"></i> Menú principal
                </h3>
                <div class="options">
                    <div class="users">
                        <i class="fa-solid fa-users"></i>
                        <span>Usuarios</span>
                    </div>
                    <div class="contract">
                        <i class="fa-solid fa-file-contract"></i>
                        <span>Contratación</span>
                    </div>
                    <div class="stats">
                        <i class="fa-solid fa-chart-column"></i>
                        <span>Informes</span>
                    </div>
                    <div class="settings">
                        <i class="fa-solid fa-gear"></i>
                        <span>Ajustes</span>
                    </div>
                </div>
            </div>
            <div class="pending_docs_section">
                <h3>
                    <i class="fa-solid fa-address-book"></i> Documentación pendiente
                </h3>

                <div class="pending_docs">
                    <ul>
                        <li class="pending_docs_item">
                            <i class="fa-solid fa-file"></i>

                            <div class="user_details">
                                <span>Nombre Apellido</span>
                                <span>Hace 2 días</span>
                            </div>

                            <i class="fa-solid fa-circle-info"></i>
                        </li>
                        <li class="pending_docs_item">
                            <i class="fa-solid fa-file"></i>

                            <div class="user_details">
                                <span>Nombre Apellido</span>
                                <span>Hace 2 días</span>
                            </div>

                            <i class="fa-solid fa-circle-info"></i>
                        </li>
                        <li class="pending_docs_item">
                            <i class="fa-solid fa-file"></i>

                            <div class="user_details">
                                <span>Nombre Apellido</span>
                                <span>Hace 2 días</span>
                            </div>

                            <i class="fa-solid fa-circle-info"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pending_users_section">
                <h3>
                    <i class="fa-solid fa-user-clock"></i> Usuarios pendientes
                </h3>

                <div class="pending_users">
                    <ul>
                        <li class="pending_user_item">
                            <i class="fa-solid fa-user"></i>

                            <div class="user_details">
                                <span>Nombre Apellido</span>
                                <span>Hace 2 días</span>
                            </div>

                            <i class="fa-solid fa-circle-info"></i>
                        </li>
                        <li class="pending_user_item">
                            <i class="fa-solid fa-user"></i>

                            <div class="user_details">
                                <span>Nombre Apellido</span>
                                <span>Hace 2 días</span>
                            </div>

                            <i class="fa-solid fa-circle-info"></i>
                        </li>
                        <li class="pending_user_item">
                            <i class="fa-solid fa-user"></i>

                            <div class="user_details">
                                <span>Nombre Apellido</span>
                                <span>Hace 2 días</span>
                            </div>

                            <i class="fa-solid fa-circle-info"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="stats_section">
                <h3>
                    <i class="fa-solid fa-chart-line"></i> Estadísticas
                </h3>
            </div>
        </section>
        
        <section class="footer_logo">
            <img src="../../../../public/img/logo_FCE_negro.webp" alt="Logo de la facultad de ciencias económicas">
        </section>
    </main>

    <script src="../../../../public/js/navbar.js"></script>
</body>
</html>