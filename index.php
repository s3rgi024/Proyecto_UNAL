<?php 

require './src/controllers/security.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/pages/login-register/index.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    
    <?php
        include ("./src/views/components/header.php");
        include ("./config/db_connection.php");
    ?>

    <main class="container__login">
        <div class="blur"></div>

        <?php 
            include ("./src/views/pages/login-register/login.php");
            include ("./src/views/pages/login-register/recover_pass.php");
            include ("./src/views/pages/login-register/register_professor.php");
        ?>

    </main>
    

    <?php
        include("./src/views/components/footer.php"); 
    ?>

    <script src="./public/js/login.js" type="module"></script>
</body>
</html>