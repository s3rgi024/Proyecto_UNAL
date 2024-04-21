<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/vis_docente.css">
    <title>Menú Docentes</title>
</head>
<body>

    <?php 
    
        include("../components/navbar.php");
    
    ?>

    <main class="main_contratacion__container min-main">

        <section class="main_contratacion__text">
            <h1>
                Cargue de Información
            </h1>
            <br>
            <p>
            Bienvenido al sitema de contratación de docentes ocasionales de la facultad de ciencias económicas de la Universidad Nacional de Colombia.
            <br>
            <br>
            Seleccione una opción a continuación:
            </p>
        </section>

        <section class="main_contratacion__options">
            <a href="../../../src/views/pages/form_docs.php" class="contratacion_option doc_pendiente" style="text-decoration: none; color: inherit;">
            <div>
                <img src="../../../public/img/doc_pendiente.webp" alt="persona buscando perfiles">
                <div class="contratacion_actions">
                    <span>Cargar Documentación</span>
                    <i class='bx bx-info-circle'></i>
                </div>
            </div>
            </a>

            <a href="../../../src/views/pages/doc_aprobada.php" class="contratacion_option doc_aprobada" style="text-decoration: none; color: inherit;">
            <div>
                <img src="../../../public/img/doc_aprobada.webp" alt="persona buscando perfiles">
                <div class="contratacion_actions">
                    <span>Información Personal</span>
                    <i class='bx bx-info-circle'></i>
                </div>
            </div>
            </a>

            <a href="../../../src/views/pages/historial.php" class="contratacion_option doc_historial" style="text-decoration: none; color: inherit;">
            <div>
                <img src="../../../public/img/doc_historial.webp" alt="persona buscando perfiles">
                <div class="contratacion_actions">
                    <span>Historial</span>
                    <i class='bx bx-info-circle'></i>
                </div>
            </div>
            </a>
        </section>

    </main>
    <script src="../../../public/js/navbar.js"></script>
</body>
</html>