<?php
// VIDEO Nro. 7 PHP ORIENTADO A OBJETO - METHODS STATIC
class Pagina
{
    //Atributos
    public $nombre = "Codigo Facilito";
    public static $url = "www.codigofacilito.com";

    //Metodos
    public function bienvenida()
    {
        // De esta manera no podemos llamar a los metodos estaticos
        // echo "Bienvenidos a <b>" . $this->nombre . "</b> la pagina es <b>" . $this->$url . "<b>";
         
        // Se tiene que llamar de la manera self::$url;
        echo "Bienvenidos a <b>" . $this->nombre . "</b> la pagina es <b>" . self::$url . "<b>";
    }

    public static function bienvenida2()
    {
        echo "Bienvenidos " . self::$url;
    }

}

class Web extends Pagina
{

}

/* CALL 1 */
$pagina = new Pagina();
$pagina->bienvenida();
/* CALL 2 (metodo estatico) sin llamar la clase y esta heradado */
//Web::bienvenida2();

// NO Podemos Llamar directo la metodo
//Pagina::bienvenida2();


?> 