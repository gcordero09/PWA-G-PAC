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
    <title>Valores</title>
</head>

<body>
    <?php
    require('./views/layout/v_navbar.php');
    ?>

    <main class="container">
        <div class="jumbotron mt-4 pt-4">
            <h1 class="display-4 text-center mb-4">
                Nuestros Valores
            </h1>
            <p class="lead text-justify">
                Una finalidad evidente de la RA y la RV ha sido la motivación para enseñar y aprender y el cambio de actitudes y valores que se muestran entre los actores del proceso educativo. <br>
                La convivencia como un valor destacable en la familia, la sociedad y la escuela ha de cuidarse coherentemente en la comunidad escolar. Por esto, se ha de promover la colaboración entre todos los implicados en la mejora del proceso a favor de la convivencia escolar como son el alumnado, el profesorado y los padres y madres. Es ahí donde se ha de trabajar coherentemente en la construcción de un clima escolar que favorezca la comunicación, la colaboración, los proyectos comunes y la convivencia en la escuela.
            </p>
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-lg-4 mb-4">
                    <img src="./public/img/va1.jpg" class="img-fluid w-100" alt="Imagen 1 sobre los valores">
                </div>
                <div class="col-lg-4 mb-4">
                    <img src="./public/img/va2.jfif" class="img-fluid w-100" alt="Imagen 2 sobre los valores">
                </div>
            </div>
        </div>
        <br><br><br>
    </main>

    <?php
    require('./views/layout/v_footer.php');
    require('./public/php/js.php');
    ?>
</body>

</html>