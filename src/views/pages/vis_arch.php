<?php 

   require '../../controllers/security.php';
   include ("../../../config/db_connection.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/vis_arch.css">
    <title>Menú Contratación</title>
</head>
  <body>
  
  <?php   
    include("../components/navbar.php");

    $sql = "SELECT * FROM usuarios WHERE id_rol = 1 AND id_estado = 1";
    $result = $db_connection->query($sql);
  ?>

    <section class="main_contratacion__text min-main">
      <h1>
        Documentación Pendiente
      </h1>
      <br>
      <p>
      Este módulo ha sido designado para permitirle acceder a la documentación proporcionada <br> por los docentes en el marco del proceso de vinculación con la universidad.      
      <br>
      <br>
        Seleccione un docente a continuación:
      </p>
    </section>

    <main class="main bd-grid min-main">
      
    <?php

        if ($result->num_rows > 0) {
            // Itera sobre cada fila de los resultados
            while($row = $result->fetch_assoc()) {

                $sql_tdoc = "SELECT abreviatura FROM tipo_documento WHERE id_tipo_documento = '" . $row['id_tdoc'] . "'";
                $result_tdoc = $db_connection->query($sql_tdoc);
                $tdoc_cons = $result_tdoc->fetch_assoc();
                ?>

                  <article class="card">
                    <div class="card__img">
                      <img src="../../../public/img/hombre.png" alt="user image" />
                    </div>
                    <div class="card__name">
                      <p>Revisar Documentos</p>
                    </div>
                    <div class="card__precis">
                      <a href="" class="card__icon"><i class="fa-solid fa-circle-info"></i></ion-icon></a>
                      <div>
                        <span class="card__preci card__preci--before">Docente Ocasional</span>
                        <span class="card__preci card__preci--now"><?php echo $row["nombre1"] . " " . $row["apellido1"]?></span>
                        <span class="card__preci card__preci--after"><?php echo $tdoc_cons["abreviatura"] . " " . $row["id_usuario"];?></span>

                      </div>
                      <a href="" class="card__icon"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </div>

                    <form action="./doc_revision.php" id="form_<?php echo $row['id_usuario']; ?>" method="post" style="display: none;">
                      <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario']; ?>">
                      <input type="hidden" name="id_tdoc" value="<?php echo $row['id_tdoc']; ?>">
                    </form>
                  </article>

                <?php
            }
        } else {
            echo "<p>No se encontraron resultados</p>";
        }
        $db_connection->close();
      ?>

    </main>

    <script type="module" src="../../../public/js/AJAX/requestProfessorFiles.js"></script>
    <script src="../../../public/js/navbar.js"></script>
  </body>
</html>
