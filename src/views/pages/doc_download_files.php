<?php 

   require '../../controllers/security.php';

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/doc_download_files.css">
    <title>Descarga de Archivos</title>
</head>
<body>

    <?php 
    
        include("../components/navbar.php");

        if (isset($_POST['folder']) && isset($_POST['user_id'])) {
            $id_user = $_POST['user_id'];
            $folder = $_POST['folder'];
        }
    
    ?>
    
    <main class="min-main">
        <section class="download_container">
            <h1>
                Carpetas de vinculación y hoja de vida generadas exitosamente
            </h1>
            <div class="download_options">
                <button class="download" data-folder-path="<?php echo $folder; ?>">
                    Descargar Carpetas
                </button>
                <button class="send_mail">
                    Enviar Correo
                </button>
            </div>
            <div class="finish_options">
                <button class="back">
                    Volver
                </button>
                <button class="finish">
                    Finalizar
                </button>
            </div>
        </section>
    </main>

    
    <script type="module" src="../../../public/js/AJAX/requestDownloadFiles.js"></script>
    <script src="../../../public/js/navbar.js"></script>
</body>
</html>