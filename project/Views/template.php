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
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Administracion de estudiantes | Frank Cedenho</title>
            <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
        </head>
        <body>
<?php
    }

    public function __destruct()
    {

?>
        </body>
        </html>
<?php
        // TODO: Implement __destruct() method.
    }
}

?>