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
    <title>Portafolios</title>
</head>

<body>
    <?php
    require('./views/layout/v_navbar.php');
    ?>

    <main class="container">
        <div class="jumbotron mt-4 pt-4">
            <h1 class="display-4 text-center mb-4">
                Portafolio
            </h1>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 m-auto" src="./public/img/ca1.jfif">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./public/img/ca2.jfif">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./public/img/ca3.jfif">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./public/img/ca4.jfif">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./public/img/ca5.jfif">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./public/img/ca6.jfif">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
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