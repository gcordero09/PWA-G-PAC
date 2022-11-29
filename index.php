<?php

if (empty($_GET)) require('./controllers/c_index.php');

if (isset($_GET['mision'])) require('./controllers/c_mision.php');

if (isset($_GET['vision'])) require('./controllers/c_vision.php');

if (isset($_GET['quienes_somos'])) require('./controllers/c_quienes_somos.php');

if (isset($_GET['valores'])) require('./controllers/c_valores.php');

if (isset($_GET['servicios_ofrecidos'])) require('./controllers/c_servicios_ofrecidos.php');

if (isset($_GET['portafolios'])) require('./controllers/c_portafolios.php');

if (isset($_GET['contacto'])) require('./controllers/c_contacto.php');

if (isset($_GET['mensajes'])) require('./controllers/c_mensajes.php');

if (isset($_GET['gpac'])) require('./controllers/c_gpac.php');


?>

<script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            console.log('La App esta cargada!');
            navigator.serviceWorker.register('./service-worker.js').then(() => {
                console.log("Service Worker Registrado");
            })
        })
    }
</script>