<div class="text-center bg-dark pb-2 pt-2">
    <a class="navbar-brand" href="./"><img src="./public/img/logo.png" alt="" class="logo"></a>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-0 pt-0">
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav m-auto">
            <a href="./" class="nav-item nav-link <?php if(empty($_GET)) echo "active" ?>">Inicio<span class="sr-only">(current)</span></a>
            <a href="?mision" class="nav-item nav-link <?php if(isset($_GET['mision'])) echo "active" ?>">Misión</a>
            <a href="?vision" class="nav-item nav-link <?php if(isset($_GET['vision'])) echo "active" ?>">Visión</a>
            <a href="?quienes_somos" class="nav-item nav-link <?php if(isset($_GET['quienes_somos'])) echo "active" ?>">¿Quienes somos?</a>
            <a href="?valores" class="nav-item nav-link <?php if(isset($_GET['valores'])) echo "active" ?>">Valores</a>
            <a href="?servicios_ofrecidos" class="nav-item nav-link <?php if(isset($_GET['servicios_ofrecidos'])) echo "active" ?>">Servicios ofrecidos</a>
            <a href="?portafolios" class="nav-item nav-link <?php if(isset($_GET['portafolios'])) echo "active" ?>">Portafolios</a>
            <a href="?contacto" class="nav-item nav-link <?php if(isset($_GET['contacto'])) echo "active" ?>">Contacto</a>
            <a href="?gpac" class="nav-item nav-link <?php if(isset($_GET['gpac'])) echo "active" ?>">Descargar App</a>
        </div>
    </div>
</nav>