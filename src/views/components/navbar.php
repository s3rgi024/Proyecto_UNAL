<?php 
    require '../../../controllers/security.php';
    require '../../../../config/db_connection.php';

    $dni = $_SESSION['id_usuario'];
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $rol = $_SESSION['rol'];

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../../../public/css/modules/navbar.css">

</head>
<body>
    
    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral mini-barra-lateral">
        <div>
            <div class="nombre-pagina">
                <div class="hamburger hamburger--spin" id="cloud">
                    <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                    </div>
                </div>

                <span class="oculto">FCE</span>
            </div>
        </div>

        <nav class="navegacion">
            <ul>
                <li>
                    <a id="inbox" href="/src/views/pages/main_menu/main.php">
                        <i class="fa-solid fa-house-chimney"></i>
                        <span class="oculto">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="../../../src/views/pages/doc_main.php">
                        <i class="fa-solid fa-file-signature"></i>
                        <span class="oculto">Contratación</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-chart-column"></i>
                        <span class="oculto">Reportes</span>
                    </a>
                </li>
                <li>
                    <a href="/src/views/pages/users/usuarios.php">
                        <i class="fa-solid fa-users"></i>                        
                        <span class="oculto">Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-gear"></i>
                        <span class="oculto">Mantenimiento</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-circle-info"></i>
                        <span class="oculto">Información</span>
                    </a>
                </li>
            </ul>
        </nav>

        <a class="logout" href="../../../../index.php">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            <span class="oculto">Cerrar Sesión</span>
        </a>

        <div>
            <div class="linea"></div>
    
            <div class="usuario">
                <img src="../../../../public/img/escudo_unal.webp" alt="Escudo Universidad Nacional de Colombia">
                <div class="info-usuario">
                    <div class="nombre-email">
                        <span class="nombre oculto"><?php echo $nombre . " " . $apellido; ?></span>
                        <span class="email oculto"><?php echo $rol; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    

</body>
</html>