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
    <title>Visión</title>
</head>

<body>
    <?php
    require('./views/layout/v_navbar.php');
    ?>

    <main class="container">
        <div class="jumbotron mt-4 pt-4">
            <h1 class="display-4 text-center mb-4">
                Visión
            </h1>
            <p class="lead text-justify">
                Con una experiencia de más de 5 años y habiendo sido una de las mejores empresas de México en implementar Realidad Aumentada en un soporte publicitario masivo, somos el partner tecnológico perfecto para desarrollar soluciones increíbles de tecnologías inmersivas.
                La dedicación, el conocimiento y la experiencia del equipo ha conseguido que empresas referentes a nivel nacional e internacional trabajen con nosotros.
            </p>
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-lg-4 mb-4">
                    <img src="./public/img/ra1.jfif" class="img-fluid w-100" alt="Imagen 1 sobre la visión">
                </div>
                <div class="col-lg-4 mb-4">
                    <img src="./public/img/ra.png" class="img-fluid w-100" alt="Imagen 2 sobre la visión">
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