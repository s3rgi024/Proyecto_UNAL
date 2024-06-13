<?php 

   require '../../controllers/security.php';

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/vis_docente.css">
    <title>Menú Contratación</title>
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
                Gestión Contratación Docentes
            </h1>
            <br>
            <p>
            Bienvenido al sitema de contratación de docentes de la facultad de ciencias 
            económicas de la Universidad Nacional de Colombia.
            </p>
            <br>
            <p>
                Seleccione una opción a continuación:
            </p>
        </section>

        <section class="main_contratacion__options">

        <a href="../../../src/views/pages/form_docs.php" class="contratacion_option doc_pendiente" style="text-decoration: none; color: inherit;">
            <div>
                <img src="../../../public/img/cargue_docs.webp" alt="persona buscando perfiles">
                <div class="contratacion_actions">
                    <span>Cargar Documentación</span>

                    <i class='fa-solid fa-circle-info' id="info"></i>
                </div>
            </div>
        </a>

        <a href="../../../src/views/pages/info_personal.php" class="contratacion_option doc_aprobada" style="text-decoration: none; color: inherit;">
            <div>
                <img src="../../../public/img/info_pers.webp" alt="persona buscando perfiles">
                <div class="contratacion_actions">
                    <span>
                        Información Personal
                    </span>

                    <i class='fa-solid fa-circle-info' id="info"></i>
                </div>
            </div>
        </a>

        <a href="../../../src/views/pages/historial.php" class="contratacion_option doc_historial" style="text-decoration: none; color: inherit;">
            <div>
                <img src="../../../public/img/contacto.webp" alt="persona buscando perfiles">
                <div class="contratacion_actions">
                    <span>
                        Medios Comunicación - FCE
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
    <script src="../../../public/js/vis_docente.js"></script>
</body>
</html>