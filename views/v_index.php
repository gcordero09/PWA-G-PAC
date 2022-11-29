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
    <title>G-PAC</title>

    <!----METAS DE PWA-->
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" type="image/png" href="./pwa/images/icons/icon-512x512.png">
    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-512x512.png">
    <link rel="apple-touch-startup-image" href="./pwa/images/icons/icon-512x512.png">

    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-72x72.png" />
    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-96x96.png" />
    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-128x128.png" />
    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-144x144.png" />
    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-152x152.png" />
    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-192x192.png" />
    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-384x384.png" />
    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-512x512.png" />
    <meta name="apple-mobile-web-app-status-bar" content="#db4938" />
</head>

<body>
    <?php
    require('./views/layout/v_navbar.php');
    ?>

    <main class="container">
        <div class="jumbotron mt-4 pt-4">
            <h1 class="display-4 text-center mb-4">
                Sobre Nosotros
            </h1>
            <div class="row">
                <div class="card col-lg-3 mb-2">
                    <img src="./public/img/guillermo.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text text-center font-weight-bold">
                            Guillermo Austreberto Cordero Tapia
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Desarrollador Back-end</li>
                        <li class="list-group-item">Base de Datos</li>
                    </ul>
                </div>
                <div class="card col-lg-3 mb-2">
                    <img src="./public/img/cesar.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text text-center font-weight-bold">
                            Cesar Pineda Milian
                        </p>
                    </div>
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item">Desarrollador Front-end</li>
                        <li class="list-group-item">Diseñador</li>
                    </ul>
                </div>
                <div class="card col-lg-3 mb-2">
                    <img src="./public/img/perla.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text text-center font-weight-bold">
                            Perla Aziri Ceballos Castrejon
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Diseñadora</li>
                        <li class="list-group-item">Documentadora</li>
                    </ul>
                </div>
                <div class="card col-lg-3 mb-2">
                    <img src="./public/img/alan2.jpeg" alt="" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text text-center font-weight-bold">
                            Alan Rosado Morales
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Desarrollador Back-end</li>
                        <li class="list-group-item">Documentador</li>
                    </ul>
                </div>
            </div>
            <br>
            <p class="text-center">
                Nuestro equipo está formado por técnicos expertos dedicados en los últimos años a la apuesta por la innovación en sistemas avanzados de Realidad Virtual y Realidad Aumentada, lo que ha permitido a la empresa conseguir diferentes avances en la realidad aumentada.
            </p>
            <h5 class="text-left"><strong>¿Quieres formar parte de nuestro equipo técnico?</strong></h5>
            <p class="text-left">Envíanos tu CV y nos pondremos en contacto contigo en menos de 3 días.
                Trabajarás en el diseño de sistemas avanzados para la Industria 4.0,
                principalmente empleando tecnologías de Realidad Aumentada y Realidad Virtual,
                en un entorno amigable y con estupendas opciones de flexibilidad.</p>
        </div>
    </main>

    <?php
    require('./views/layout/v_footer.php');
    require('./public/php/js.php');
    ?>
</body>

</html>