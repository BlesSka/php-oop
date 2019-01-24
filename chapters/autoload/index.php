<?php
// Video Nro.10.- Autoload

    $url = $_GET['action'];

    function autoload($clase)
    {
        include $_GET['action'] . "/". $clase . ".php";
        // include "class/" . $clase . ".php";
    }

    spl_autoload_register("autoload");

    Auto::mostrar("Hola mundo");
    echo "<br>";
    Persona::mostrar("BlesSka");

?>