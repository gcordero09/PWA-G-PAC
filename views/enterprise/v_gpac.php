<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  require('./public/php/css.php');
  require('./views/layout/v_head.php');
  ?>
  <title>APW</title>
</head>

<body>
  <?php
  require('./views/layout/v_navbar.php');
  ?>

  <main class="container">
    <div class="jumbotron mt-4 pt-4">
      <h1 align="center">Descargar Aplicación APK
        <br>
        <a align="center" href="https://goo.su/9ah0l" class="btn-lg active btn-primary">DESCARGAR</a>
      </h1>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <center> <img src="./public/img/tutor1.jpg" class="d-block w-25" alt="..."></center>
          </div>
          <div class="carousel-item">
            <center><img style-align="center" src="./public/img/tutor2.jpg" class="d-block w-25" alt="..."></center>
          </div>
          <div class="carousel-item">
            <center><img style-align="center" src="./public/img/tutor3.jpg" class="d-block w-25" alt="..."></center>
          </div>
          <div class="carousel-item">
            <center><img style-align="center" src="./public/img/tutor4.jpg" class="d-block w-25" alt="..."></center>
          </div>
          <div class="carousel-item">
            <center><img style-align="center" src="./public/img/tutor5.jpg" class="d-block w-25" alt="..."></center>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
          <span class="carousel-control-prev-icon" style="background:black;font-weight:bold" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
          <span class="carousel-control-next-icon" style="background:black;font-weight:bold" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
      <br>
      <br>

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8 col-md-10">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-25 m-auto" src="./public/img/tt1.jpg">
                <center><a text-align="center">Debe dar clic en los tres puntos que estan señalados en la imagen</a></center>
              </div>
              <div class="carousel-item">
                <img class="d-block w-25 m-auto" src="./public/img/tt2.jpg">
                <center><a text-align="center">Despues de haber dado clic le abrira una ventana desplegable donde volvera a dar clic en la opcion agregar a pantalla principal como se muestra</a></center>
              </div>
              <div class="carousel-item">
                <img class="d-block w-25 m-auto" src="./public/img/tt3.jpg">
                <center><a text-align="center">por ultimo dara agregar en la ventana que le aparecera</a></center>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span style="background:black;font-weight:bold" class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <!-- <span style="background:black;font-weight:bold" class="carousel-control-next-icon" aria-hidden="true"></span> -->
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>



  <?php
  require('./views/layout/v_footer.php');
  require('./public/php/js.php');
  ?>
</body>

</html>
