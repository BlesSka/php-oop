<?php

spl_autoload_register(function ($clase) {
//    print $clase;
    $ruta = str_replace("\\", "/", $clase) . ".php";
//    print $ruta;
    if (is_readable($ruta)) {
        require_once $ruta;
    }else{
        echo "El archivo no Existe";
    }
});

//De esta manera esta demostrado el Ejemplo Sencillo de como Funciona un NAMESPACE. ARRIBA ESTA LA MANERA CON UN AUTOLOAD

//require_once "Models/Persona.php";
//require_once "Controllers/PersonasController.php";

Models\Persona::Hola();
Controllers\PersonasControllers::hola();

//FUNCIONANES ANONIMAS PHP
//function($nombre)
//{
//    printf("Hola %s\r\n", $nombre);
//};


//$saludo = function($nombre)
//{
//    printf("Hola %s\r\n", $nombre);
//};
//
//$saludo('Mundo');
//$saludo('PHP');
?>

<!--FUnCIones en Aninimas y autoejecutables JAVASCRIPT-->
<script>

    (function (uno, dos, tres) {
        console.log(uno);
        console.log(dos);
        console.log(tres);
    }(12, 34, 55));
</script>
