<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../node_modules/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="../../../public/css/main.css">
    <title>Menú Principal</title>
</head>
<body>

    <?php
        include("../components/navbar.php");
    ?>

    <main class="main_content min-main">

        <section class="main_content_popup">
            <p>
                Bienvenido <span><?php echo $nombre . " " . $apellido; ?></span>. Usted tiene el rol
                de <span><?php echo $rol; ?></span>, por favor, seleccione el sistema al
                que desea ingresar
            </p>
        </section>

        <section class="main_content_options">

            <a href="">
                <div class="main_option" id="salones">
                    <img src="../../../public/img/salon.jpg" alt="Salón">
                    <div class="blur"></div>
                    
                    <div class="main_option__text">
                        <div>
                            <h2><i class='bx bxs-school'></i> Salones</h2>
                        </div>
                        <p>
                            Sistema de gestión de salones de la Facultad de
                            Ciencias Económicas
                        </p>
                    </div>
                </div>
            </a>

            <a href="./doc_main.php">
                <div class="main_option" id="contratacion">
                    <img src="../../../public/img/contratacion.jpg" alt="Contratación">
                    <div class="blur"></div>

                    <div class="main_option__text">
                        <div>
                            <h2><i class='bx bxs-briefcase-alt-2' ></i> Contratación</h2>
                        </div>
                        <P>
                            Sistema de contratación de docentes ocasionales
                            de la Facultad de Ciencias Económicas
                        </P>
                    </div>
                </div>
            </a>

        </section>
        
        <section class="footer_logo">
            <img src="../../../public/img/logo_FCE_blanco.webp" alt="Logo de la facultad de ciencias económicas">
        </section>
    </main>

    <script src="../../../public/js/navbar.js"></script>
</body>
</html>