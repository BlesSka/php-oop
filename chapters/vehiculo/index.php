<?php

class Vehiculo {
//    Attributes
    public $motor = false;
    public $marca;
    public $color;

//    Methods
    public function estado()
    {
        if($this->motor){
            echo "El motor esta encendido<br>";
        }else{
            echo "El motor esta apagado<br>";
        }
    }
    public function encender()
    {
        if($this->motor){
            echo "Cuidado! el motor esta encendido<br>";
        }else{
            echo "El Motor esta encedido<br>";
            $this->motor = true;
        }
    }

}
class Moto extends Vehiculo {

    public function estadoMoto(){
        $this->estado();
    }
}
class cuatriMoto extends Moto{

}

/* Primer Bloque de Pruebas Class Vehiculo
$vehiculo = new Vehiculo();
$vehiculo->estado();
$vehiculo->encender();
$vehiculo->estado();
*/

/* Segundo Bloque de Pruebas Class Moto
$moto = new Moto();
$moto->estado();
$moto->encender();
$moto->estado();
*/

/*Tercer Bloque de Pruebas Class Cuatrimoto*/
$moto = new cuatriMoto();
$moto->estado();

?>