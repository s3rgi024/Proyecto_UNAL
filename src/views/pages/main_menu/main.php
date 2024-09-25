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

    <div id="particles-js"></div>

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
                    <a href="../users/usuarios.php">
                        <button class="users">
                            <i class="fa-solid fa-users"></i>
                            <span class="circle"></span>
                            <span>Usuarios</span>
                        </button>
                    </a>
                    <button class="contract">
                        <i class="fa-solid fa-file-contract"></i>
                        <span class="circle"></span>
                        <span>Contratación</span>
                    </button>
                    <button class="stats">
                        <i class="fa-solid fa-chart-column"></i>
                        <span class="circle"></span>
                        <span>Informes</span>
                    </button>
                    <button class="settings">
                        <i class="fa-solid fa-gear"></i>
                        <span class="circle"></span>
                        <span>Ajustes</span>
                    </button>
                </div>
            </div>
            
            <?php 
                
                require './pending_docs.php';
                require './pending_users.php';
                require './stats.php';

                $db_connection->close();
                
            ?>

        </section>
        
        <footer class="footer_logo">
            <img src="../../../../public/img/logo_FCE_negro.webp" alt="Logo de la facultad de ciencias económicas">
        </footer>
    </main>

    <script src="../../../../public/js/navbar.js"></script>
    <script src="../../../../public/js/main_menu.js"></script>
    <script src="./particles.min.js"></script>
    <script>
        particlesJS(
            {
            "particles": {
                "number": {
                "value": 55,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
                },
                "color": {
                "value": "#000000"
                },
                "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
                },
                "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
                },
                "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
                },
                "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#000000",
                "opacity": 0.4,
                "width": 1
                },
                "move": {
                "enable": true,
                "speed": 4,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                "onhover": {
                    "enable": true,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": false,
                    "mode": "push"
                },
                "resize": true
                },
                "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                    "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
                }
            },
            "retina_detect": true
            }
        )
    </script>
</body>
</html>