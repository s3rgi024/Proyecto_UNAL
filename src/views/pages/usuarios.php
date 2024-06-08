<?php 

require '../../controllers/security.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/usuarios.css">
    <title>Gestión Usuarios</title>
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
                Usuarios
            </h1>
            <br>
            <p>
            Bienvenido al sistema de gestión de usuarios, desde este punto, se gestionarán todos los aspectos relacionados con los perfiles, roles y datos de los usuarios que pertenecen a la Facultad.
            </p>
            <br>
            <p>
                Seleccione una opción a continuación:
            </p>
            <br>
        </section>

        <section class="main_contratacion__options">

        <a href="../../../src/views/pages/apro_usuarios.php" class="contratacion_option doc_pendiente" style="text-decoration: none; color: inherit;">
            <div>
                <img src="../../../public/img/users.webp" alt="persona buscando perfiles">
                <div class="contratacion_actions">
                    <span>Aprobación Usuarios</span>

                    <i class='fa-solid fa-circle-info' id="info"></i>
                </div>
            </div>
        </a>

        <a href="../../../src/views/pages/info_personal.php" class="contratacion_option doc_aprobada" style="text-decoration: none; color: inherit;">
            <div>
                <img src="../../../public/img/users_inf.webp" alt="persona buscando perfiles">
                <div class="contratacion_actions">
                    <span>
                        Usuarios Pendientes
                    </span>

                    <i class='fa-solid fa-circle-info' id="info"></i>
                </div>
            </div>
        </a>

        <a href="../../../src/views/pages/info_usuarios.php" class="contratacion_option doc_historial" style="text-decoration: none; color: inherit;">
            <div>
                <img src="../../../public/img/user_info.webp" alt="persona buscando perfiles">
                <div class="contratacion_actions">
                    <span>
                        Información Usuarios    
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