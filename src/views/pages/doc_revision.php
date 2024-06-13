<?php 

require '../../controllers/security.php';

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../public/css/doc_revision.css">
        <title>Revisión de Documentos</title>
    </head>
    <body>
        <?php 
        
        include("../components/navbar.php");
        
        // Verificar si se recibió el ID del usuario mediante AJAX
        if (isset($_POST['id_usuario']) && isset($_POST['id_tdoc'])) {
            $id_user = $_POST['id_usuario'];
            $id_tdoc = $_POST['id_tdoc'];
            $sql = "SELECT * FROM usuarios WHERE id_usuario = $id_user AND id_tdoc = $id_tdoc";
            
            $result = $db_connection->query($sql);
            $user_cons = $result->fetch_assoc();
            
            if ($result && $result->num_rows > 0) {
               ?>
               
                <main class="min-main doc_revision__main">
                    <section class="files_list">
                        <h2>Lista de documentos</h2>
                        <div class="swiper_fileList">
                            <div class="swiper-wrapper">
                                <?php

                                $user_folder = $user_cons['nombre1'] . $user_cons['apellido1'] . "_" . $user_cons['id_usuario'];

                                $user_folder = '../../../docs/docentes_ocasionales/' . $user_folder;

                                // Obtener archivos en la carpeta "Vinculación"
                                $files_vinculacion = glob($user_folder . "/Vinculacion/*");
                                // Obtener archivos en la carpeta "Hoja de Vida"
                                $files_hoja_de_vida = glob($user_folder . "/Hoja de Vida/*");

                                // Combinar los archivos de ambas carpetas en una sola lista
                                $files = array_merge($files_vinculacion, $files_hoja_de_vida);

                                foreach ($files as $file) {
                                    $fileName = basename($file);
                                    if (pathinfo($file, PATHINFO_EXTENSION) === 'pdf') {
                                        ?>
                                        <div class="swiper-slide" data-filename="<?php echo $fileName ?>">
                                            <span><i class="fa-regular fa-file-lines"></i> <?php echo $fileName ?> </span>
                                        </div>
                                        <?php
                                    }
                                }

                                ?>
                            </div>

                            <div class="swiper-button-prev-list"></div>
                            <div class="swiper-button-next-list"></div>
                        </div>

                    </section>

                    <section class="file_actions">
                        <section class="file_action__pdf_view">
                            <div class="pdf_view__file">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <?php
                                        foreach ($files as $file) {
                                            $fileName = basename($file);
                                            if (pathinfo($file, PATHINFO_EXTENSION) === 'pdf') {
                                                ?>
                                                
                                                    <div class="swiper-slide" data-filename="<?php echo $fileName ?>">
                                                        <iframe src="<?php echo $file; ?>"></iframe>
                                                    </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="swiper-scrollbar"></div>
                                </div>
                            </div>

                            <div class="pdf_view__details">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                                <div class="details__content">
                                    <span><i class="fa-regular fa-file-lines"></i> <span>Nombre:</span> <span id="fileName"></span></span>
                                    <span><button class="reportButton"><i class="fa-solid fa-circle-exclamation"></i></button></span>
                                </div>
                            </div>
                        </section>

                        <section class="file_action__navbar_lateral">
                            <div class="file_action__reported_files">
                                <h3>Lista de Archivos Reportados</h3>
                                <ul id="reported-files" class="reported-files">

                                </ul>
                            </div>

                            <div class="file_action__button_files">
                                <button class="back">
                                    Volver
                                </button>

                                <button class="report">
                                    Reportar
                                </button>
                                
                                <form action="./doc_download_files.php" class="form_download_files" method="post" style="display: none;">
                                    <input type="hidden" name="folder" id="folder" value="<?php echo $user_folder ?>">
                                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $$user_cons['id_usuario'] ?>">
                                </form>
                                    <button class="approve">
                                        Aprobar
                                    </button>
                                
                            </div>

                        </section>
                    </section>
                </main>
               
               <?php 
            } else {
                // El usuario no existe
                echo "El usuario no existe en la base de datos.";
            }

} else {
    echo "No se recibió el ID del usuario.";
}
?>

    <script type="module" src="../../../public/js/doc_revision.js"></script>
    <script src="../../../public/js/navbar.js"></script>
</body>
</html>
