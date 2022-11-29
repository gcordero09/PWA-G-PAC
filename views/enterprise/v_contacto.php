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
    <title>Contacto</title>
</head>

<body>
    <?php
    require('./views/layout/v_navbar.php');
    ?>

    <main class="container-fluid row m-auto">
        <div class="jumbotron jumbotron-fluid mt-4 p-4 col-sm-8 col-md-6 col-lg-4 mx-auto">
            <h1 class="titulo text-center">
                Contacto
            </h1>
            <form action="?contacto" method="POST" class="">
                <div class="form-group">
                    <label for="">Nombre (s):</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Apellidos:</label>
                    <input type="text" name="last_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Correo:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Mensaje:</label>
                    <textarea name="message" id="" cols="30" rows="5" class="form-control" required></textarea>
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="form-control btn btn-primary">
                    <a href="?mensajes" class="btn btn-success mt-2">Mensajes</a>
                </div>
            </form>
        </div>
    </main>

    <?php
    require('./views/layout/v_footer.php');
    require('./public/php/js.php');
    ?>
</body>

</html>