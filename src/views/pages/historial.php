<?php 

require '../../controllers/security.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/historial.css">
    <title>Historial</title>
</head>
  <body>
  
  <?php   
    include("../components/navbar.php");
  ?>

    <section class="main_contratacion__text min-main">
      <h1>
        Historial
      </h1>
      <br>
      <p>
      Este módulo le permitirá consultar el historial de documentación y verificar el estado actual de los docentes en el proceso de vinculación con la universidad.      
      <br>
      <br>
        Seleccione una opción a continuación:
      </p>
    </section>

    <main class="main bd-grid min-main">
      
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

    </main>
    <script src="../../../public/js/navbar.js"></script>
  </body>
</html>
