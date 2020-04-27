<?php
/**
 * Video Nro. 11 - Uso de Traits
 * Created by PhpStorm.
 * User: frank
 * Date: 03-Nov-18
 * Time: 1:32 PM
 */

    trait Persona2 {

        public $nombre;

        public function mostrarNombre()
        {
            echo $this->nombre;
        }
        abstract function asignarNombre($nombre);
    }

    trait Trabajador {
//        Los Metodos protegido no pueden ser usados por el objeto;
        protected function mensaje() {
            echo "Mi nombre es ";
        }
    }

    class Persona
    {

        use Persona2, Trabajador;

        public function asignarNombre($nombre)
        {
            $this->nombre = $nombre . self::mensaje();
        }
    }
    $persona = new Persona();
    $persona->asignarNombre("Frank");
//    echo $persona->nombre;
    $persona->mostrarNombre();
//    Esto no funciona porque los metodos no puede ser utilizados por el Objeto
//    $persona->mensaje();