<?php

namespace Views;

$template = new Template();

class Template
{

    public function __construct()
    {

        ?>
        <!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Administracion de estudiantes | Frank Cedenho</title>
            <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
            <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/opp.css">
            <link rel="icon" type="image/png" href="<?= URL; ?>Views/template/imagenes/logos/favicon.png">
        </head>
        <body>

        <header class="container-fluid navbar-dark bg-dark">
            <nav id="navbar-example2" class="navbar container">
                <a class="navbar-brand" href="#">Dashboard</a>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php URL; ?>/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false" href="#">Estudiantes</a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="<?php URL; ?>/estudiantes/add">Agregar</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php URL; ?>/estudiantes">Listado</a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false">Secciones</a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="<?php URL; ?>/secciones/add">Agregar</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php URL; ?>/secciones">Listado</a>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <?php
    }

    public function __destruct()
    {

        ?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
                integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
                integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
                crossorigin="anonymous"></script>
        </body>
        </html>
        <?php
        // TODO: Implement __destruct() method.
    }
}

?>