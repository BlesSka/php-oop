<?php

class Loteria
{

//    Attributes
    public $numero;
    public $intentos;
    public $resultado = false;

//    Methods
    public function __construct($numero, $intentos)
    {
        $this->numero = $numero;
        $this->intentos = $intentos;
    }

    public function sotear()
    {
        $min = $this->numero / 2;
        $max = $this->numero * 2;
        for ($i = 0; $i < $this->intentos; $i++) {
            $int = rand($min, $max);
            self::intentos($int);
        }
    }

    public function intentos($int)
    {
        if ($int == $this->numero) {
            echo " <b> " . $int . " == " . $this->numero . " </b> <br> ";
            $this->resultado = true;
        }else{
            echo $int . " != ". $this->numero . "<br>";
        }
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        if ($this->resultado){
            echo "Felicitaciones, has acertado en " . $this->intentos . "<br>";
        }else{
            echo "Que lastima, has acertado en 
            " . $this->intentos . "<br>";
        }
    }
}

$lot = new Loteria(10, 5);
$lot->sotear()  ;