<?php 

require '../../controllers/security.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/mantenimiento.css">
    <title>Mantenimiento</title>
</head>
<body>

    <?php 
    
        include("../components/navbar.php");
    
    ?>

    <section class="main_contratacion__background">
    </section>
    
    <main class="main_contratacion__container min-main">
        <section class="main_contratacion__text">
            <h1>
                Mantenimiento
            </h1>
            <br>
            <p>
            ¡Bienvenido a la pantalla de mantenimiento! Aquí podrás actualizar tu información personal, generar reportes y visualizar toda la información relevante.
            <br>
            <br>
            Seleccione una opción a continuación:
            </p>
        </section>

        <section class="main_contratacion__options">

        <a href="../../../src/views/pages/info_personal.php" class="contratacion_option doc_pendiente" style="text-decoration: none; color: inherit;">
            <div>
                <img src="../../../public/img/info_personal.webp" alt="persona buscando perfiles">
                <div class="contratacion_actions">
                    <span>Información Personal</span>

                    <i class='fa-solid fa-circle-info' id="info"></i>
                </div>
            </div>
        </a>

        <a href="../../../src/views/pages/doc_aprobada.php" class="contratacion_option doc_aprobada" style="text-decoration: none; color: inherit;">
            <div>
                <img src="../../../public/img/reporte.webp" alt="persona buscando perfiles">
                <div class="contratacion_actions">
                    <span>
                        Generar Reporte
                    </span>

                    <i class='fa-solid fa-circle-info' id="info"></i>
                </div>
            </div>
        </a>

        <a href="../../../src/views/pages/historial.php" class="contratacion_option doc_historial" style="text-decoration: none; color: inherit;">
            <div>
                <img src="../../../public/img/informacion.webp" alt="persona buscando perfiles">
                <div class="contratacion_actions">
                    <span>
                        Más información
                    </span>
                    <i class='fa-solid fa-circle-info' id="info"></i>
                </div>
            </div>
        </a>
        </section>
        

        <section class="footer_logo">
            <img src="../../../public/img/Logo_FCE_negro.webp" alt="Logo de la facultad de ciencias económicas">
        </section>
    </main>

    

    <script src="../../../public/js/navbar.js"></script>
    <script src="../../../public/js/main_contratacion.js"></script>
</body>
</html>