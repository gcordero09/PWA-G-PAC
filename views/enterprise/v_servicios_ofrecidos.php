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
    <title>Servicios ofrecidos</title>
</head>

<body>
    <?php
    require('./views/layout/v_navbar.php');
    ?>

    <main class="container">
        <div class="jumbotron mt-4 pt-4">
            <h1 class="display-4 text-center">
                Servicios que Ofrecemos
            </h1>
            <div class="row d-flex justify-content-center text-center">
                <div class="opcion col-lg-3 border border-dark rounded pt-5 pb-5">
                    <h2 class="mt-5">Básico</h2>
                    <img src="./public/img/1.png" alt="">
                    <h3>500 <sup>$</sup></h3>
                    <p>Paga ahora y recibe un 30% en el diseño de tu App de Realidad Aumentada</p>
                    <a href="" class="boton mb-5">Paga ahora</a>
                </div>
                <div class="opcion col-lg-3 border border-dark rounded pt-5 pb-5">
                    <h2 class="mt-5">Estandar</h2>
                    <img src="./public/img/2.png" alt="">
                    <h3>700 <sup>$</sup></h3>
                    <p>Paga ahora y recibe un 30% en el diseño de tu App de Realidad Aumentada</p>
                    <a href="" class="boton mb-5">Paga ahora</a>
                </div>
                <div class="opcion col-lg-3 border border-dark rounded pt-5 pb-5">
                    <h2 class="mt-5">Premium</h2>
                    <img src="./public/img/3.png" alt="">
                    <h3>1000 <sup>$</sup></h3>
                    <p>Paga ahora y recibe un 30% en el diseño de tu App de Realidad Aumentada</p>
                    <a href="" class="boton mb-5">Paga ahora</a>
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