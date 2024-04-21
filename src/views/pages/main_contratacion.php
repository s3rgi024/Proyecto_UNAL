<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/main_contratacion.css">
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
                Gestión Contratación
            </h1>
            <p>
            Bienvenido al sitema de contratación de docentes ocasionales de la facultad de ciencias 
            económicas de la Universidad Nacional de Colombia.
            <br>
            Seleccione una opción a continuación:
            </p>
        </section>

        <section class="main_contratacion__options">

            <div class="contratacion_option doc_pendiente">
                <img src="../../../public/img/doc_pendiente.webp" alt="persona buscando perfiles">

                <div class="contratacion_actions">
                    <span>
                        Documentación pendiente
                    </span>

                    <i class='fa-solid fa-circle-info' id="info"></i>
                </div>
            </div>

            <div class="contratacion_option doc_aprobada">
                <img src="../../../public/img/doc_aprobada.webp" alt="persona buscando perfiles">

                <div class="contratacion_actions">
                    <span>
                        Documentación aprobada
                    </span>

                    <i class='fa-solid fa-circle-info' id="info"></i>
                </div>
            </div>

            <div class="contratacion_option doc_historial">
                <img src="../../../public/img/doc_historial.webp" alt="persona buscando perfiles">

                <div class="contratacion_actions">
                    <span>
                        Historial
                    </span>

                    <i class='fa-solid fa-circle-info' id="info"></i>
                </div>
            </div>
        </section>
        

        <section class="footer_logo">
            <img src="../../../public/img/Logo_FCE_negro.webp" alt="Logo de la facultad de ciencias económicas">
        </section>
    </main>

    

    <script src="../../../public/js/navbar.js"></script>
    <script src="../../../public/js/main_contratacion.js"></script>
</body>
</html>