<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../node_modules/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="../../../public/css/vis_arch.css" />
    <title>Visualización Documentos</title>
  </head>
  <body>
  
    <?php
    
      include ("../components/header.php");

    ?>

    <main class="main bd-grid">
      <article class="card">
        <div class="card__img">
          <img src="../../../public/img/hombre.png" alt="" />
        </div>
        <div class="card__name">
          <p>Revisar Documentos</p>
        </div>
        <div class="card__precis">
          <a href="" class="card__icon"><i class='bx bx-info-circle'></i></ion-icon></a>
          <div>
            <span class="card__preci card__preci--before">Docente Ocasional</span>
            <span class="card__preci card__preci--now">Santiago Alza</span>
          </div>
          <a href="" class="card__icon"><i class='bx bx-search'></i></a>
        </div>
      </article>

      <article class="card">
        <div class="card__img">
          <img src="../../../public/img/mujer.png" alt="" />
        </div>
        <div class="card__name">
          <p>Revisar Documentos</p>
        </div>
        <div class="card__precis">
          <a href="" class="card__icon"><i class='bx bx-info-circle'></i></a>

          <div>
            <span class="card__preci card__preci--before">Docente Ad-Honorem</span>
            <span class="card__preci card__preci--now">Juana Martinez</span>
          </div>
          <a href="" class="card__icon"><i class='bx bx-search'></i></a>
        </div>
      </article>

      <article class="card">
        <div class="card__img">
          <img src="../../../public/img/hombre.png" alt="" />
        </div>
        <div class="card__name">
          <p>Revisar Documentos</p>
        </div>
        <div class="card__precis">
          <a href="" class="card__icon"><i class='bx bx-info-circle'></i></a>

          <div>
            <span class="card__preci card__preci--before">Docente Ocasional</span>
            <span class="card__preci card__preci--now">Sergio Chaparro</span>
          </div>
          <a href="" class="card__icon"><i class='bx bx-search'></i></a>
        </div>
      </article>
    </main>

    <?php
    
      include ("../components/footer.php");

    ?>
  </body>
</html>
