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
    <title>Misión</title>
</head>

<body>
    <?php
    require('./views/layout/v_navbar.php');
    ?>

    <main class="container">
        <div class="jumbotron mt-4 pt-4">
            <h1 class="display-4 text-center mb-4">
                Nuestra Misión
            </h1>
            <p class="lead text-justify">
                Del entusiasmo a la entrega, el equipo de realidad aumentada es consciente de que vivimos un momento único en la historia con la llegada de la realidad virtual y aumentada, donde todo aún está por descubrir y mejorar.
            </p>
            <ul class="lead">
                <li>La realidad virtual y aumentada van a revolucionar todo y tienen un gran futuro que pretendemos impulsar.</li>
                <li>Las empresas, profesionales, usuarios e interesados requieren de servicios que pretendemos cubrir.</li>
                <li>Mexico, así como toda la comunidad hispanohablante, tiene un gran talento que pretendemos fomentar.</li>
            </ul>
            <p class="lead text-justify">
                Nuestro objetivo es dar lo mejor de nosotros mismos para cubrir todas las necesidades de información y comunicación de los diferentes actores que interactúan con estos nuevos medios, así como apoyar y promover su éxito.
            </p>
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-lg-4 mb-4">
                    <img src="./public/img/fondo.jpg" class="img-fluid w-100" alt="Imagen 1 sobre la misión">
                </div>
                <div class="col-lg-4 mb-4">
                    <img src="./public/img/m1.jfif" class="img-fluid w-100" alt="Imagen 2 sobre la misión">
                </div>
            </div>
            <br>
        </div>
    </main>

    <?php
    require('./views/layout/v_footer.php');
    require('./public/php/js.php');
    ?>
</body>

</html>