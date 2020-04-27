<?php

class Persona
{
    //Atributos

    public $nombre = "Frank";

    //Metodos

    public function hablar($mensaje)
    {
        echo $mensaje;
    }
}

    $persona = new Persona();
//    echo $persona->nombre;
    $persona->hablar("Hello ". $nombre);
?>