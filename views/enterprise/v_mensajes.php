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
    <title>Mensajes</title>
</head>

<body>
    <?php
    require('./views/layout/v_navbar.php');
    ?>

    <div class="container">
        <div class="jumbotron mt-4 pt-4">
            <h1 class="display-4 text-center mb-4">
                Mensajes
            </h1>
            <table class="table table-responsive m-auto">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre (s)</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Mensaje</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($row)
                        foreach ($row as $row) { ?>
                        <tr>
                            <td scope="col"><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['last_name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['message'] ?></td>
                        </tr>
                    <?php
                        }
                    else {
                    ?>
                        <tr>
                            <td colspan="5" class="text-center">No se han recibido mensajes nuevos</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php
    require('./views/layout/v_footer.php');
    require('./public/php/js.php');
    ?>
</body>

</html>