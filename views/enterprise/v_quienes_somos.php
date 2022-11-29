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
    <title>¿Quienes somos?</title>
</head>

<body>
    <?php
    require('./views/layout/v_navbar.php');
    ?>

    <main class="container">
        <div class="jumbotron mt-4 pt-4">
            <h1 class="display-4 text-center mb-4">
                ¿Quiénes somos?
            </h1>
            <p class="lead text-justify">
                Somos una empresa de innovación y desarrollo tecnológico ya que con la incorporación de la realidad virtual y aumentada la tecnología ha dado un salto agigantado en la sociedad por lo que el desarrollo de esa tecnología es un nuevo punto de partida para la mayoría de empresas de videojuegos o de cualquier tipo, como los demás. Nosotros hemos incorporado la realidad aumentada a nuestra empresa para ofrecerle al público una expereciencia nueva e innovadora.
            </p>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 mb-4">
                    <img src="./public/img/v1.jpg" class="img-fluid w-100" alt="Imagen 1 sobre ¿quienes somos?">
                </div>
                <div class="col-lg-4 mb-4">
                    <img src="./public/img/v2.jpg" class="img-fluid w-100" alt="Imagen 2 sobre ¿quienes somos?">
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