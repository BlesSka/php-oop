<?php 
    // Videos 9.- Clases & Metodos abstractos
    abstract class Molde
    {
        // Methods
        abstract public function ingresarNombre($nombre);
        abstract public function obtenerNombre();

    }
    

    class Persona extends Molde
    {
        // Attributes
        private $mensaje = "Hola Gente Mundo BlesSKa";

        private $nombre;

        public function mostrar(){
            print $this->mensaje;
        }
        
        public function ingresarNombre($nombre, $username = " bSka "){
            $this->nombre = $nombre . $username;
        }
        public function obtenerNombre(){
            print $this->nombre;
        }
    }

    $obj = new Persona;
    $obj->ingresarNombre("Frank ", "Cedeno");
    $obj->obtenerNombre();


?>
