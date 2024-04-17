<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../../public/css/modules/navbar.css">
    <link rel="stylesheet" href="../../../node_modules/boxicons/css/boxicons.min.css">

</head>
<body>
    
    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral mini-barra-lateral">
        <div>
            <div class="nombre-pagina">
                <ion-icon id="cloud" name="business-outline"></ion-icon>
                <span class="oculto">FCE</span>
            </div>
            <button class="boton">
                <ion-icon name="log-out-outline"></ion-icon>
                <span class="oculto">Cerrar Sesión</span>
            </button>
        </div>

        <nav class="navegacion">
            <ul>
                <li>
                    <a id="inbox" href="../pages/main.php">
                        <ion-icon name="home-outline"></ion-icon>
                        <span class="oculto">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="grid-outline"></ion-icon>
                        <span class="oculto">Salones</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="person-add-outline"></ion-icon>
                        <span class="oculto">Contratación</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span class="oculto">Reportes</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="settings-outline"></ion-icon>
                        <span class="oculto">Mantenimiento</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="layers-outline"></ion-icon>
                        <span class="oculto">Historial</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="information-circle-outline"></ion-icon>
                        <span class="oculto">Información</span>
                    </a>
                </li>
            </ul>
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