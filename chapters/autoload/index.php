<?php
// Video Nro.10.- Autoload

    // Pasando por la URL localhost/index.php?action=clases, siento esta en nombre de la carpeta donde se encuentra las clases que necesitamos (AUTOLOAD)
    $url = $_GET['action']; 
    
    function autoload($clase)
    {
        include $url . "/". $clase . ".php";
        // include "class/" . $clase . ".php";
    }

    spl_autoload_register("autoload");

    Auto::mostrar("Hola mundo");
    echo "<br>";
    Persona::mostrar("BlesSka");

?>