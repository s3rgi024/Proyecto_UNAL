<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/doc_revision.css">
    <title>Document</title>
</head>
<body>
    <?php
    
        include("../components/navbar.php");
    
    ?>

    <main class="min-main doc_revision__main">
      
        <section class="files_list">
            <h2>Lista de documentos</h2>

            <div class="swiper_fileList">
                <div class="swiper-wrapper">
                    <?php
                        $folder = '../../../docs';
                        $files = glob($folder . '/*');

                        foreach ($files as $file) {

                        $fileName = basename($file);

                            if (pathinfo($file, PATHINFO_EXTENSION) === 'pdf') {
                                    
                            echo '<div class="swiper-slide">
                                    <span><i class="fa-regular fa-file-lines"></i> ' . $fileName . '</span>
                                  </div>';
                            }
                        }
                    ?>
                </div>
                
                        <div class="swiper-button-prev-list"></div>
                        <div class="swiper-button-next-list"></div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination-list"></div>
                
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
                                    
                                    echo '<div class="swiper-slide">
                                                <iframe src="' . $file . '"></iframe>
                                          </div>';
                                }
                            }
                        ?>

                            
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        

                    <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>

                </div>

                <div class="pdf_view__details">

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    
                    <div class="details__content">
                        <span><i class="fa-regular fa-file-lines"></i> <span>Nombre:</span> <span id="fileName"><?php echo $fileName; ?></span></span>

                        <span><button><i class="fa-solid fa-circle-exclamation"></i></button></span>
                    </div>
                </div>
            </section>

            <!--<section class="file_action__checklist">
                <h4>Lista de verificación</h4>
                <form action="" method="post">
                    <div class="checklist__item">
                    </div>

                    <div class="checklist__item">
                    </div>
                </form>
            </section>-->
        </section>

    </main>



    <script type="module" src="../../../public/js/doc_revision.js"></script>
    <script src="../../../public/js/navbar.js"></script>
    
</body>
</html>