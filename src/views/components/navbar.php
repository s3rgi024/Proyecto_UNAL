<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../../public/css/modules/navbar.css">

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
                    <a id="inbox" href="../pages/main.php">
                        <i class="fa-solid fa-house-chimney"></i>
                        <span class="oculto">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-school"></i>
                        <span class="oculto">Salones</span>
                    </a>
                </li>
                <li>
                    <a href="#">
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
                    <a href="#">
                        <i class="fa-solid fa-gear"></i>
                        <span class="oculto">Mantenimiento</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        <span class="oculto">Historial</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-circle-info"></i>
                        <span class="oculto">Información</span>
                    </a>
                </li>
            </ul>
            <button class="boton">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span class="oculto">Cerrar Sesión</span>
            </button>
        </nav>

        

        <div>
            <div class="linea"></div>
    
            <div class="usuario">
                <img src="../../../public/img/escudo_unal.webp" alt="Escudo Universidad Nacional de Colombia">
                <div class="info-usuario">
                    <div class="nombre-email">
                        <span class="nombre oculto">Rol</span>
                        <span class="email oculto">Usuario</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    

</body>
</html>