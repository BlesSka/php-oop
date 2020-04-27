<?php

class persons
{

//Attributes
    public $name = array();
    public $lastname = array();

//Methods
    public function save($name, $lastname)
    {
        $this->name[] = $name;
        $this->lastname[] = $lastname;
    }

    public function show(){
        for($i = 0; $i < count($this->name); $i++) {
//            TRES FORMAS DE LLAMAR UN METODO
            $this->format($this->name[$i],  $this->lastname[$i]);
//            persons::format($this->name[$i],  $this->lastname[$i]);
//            self::format($this->name[$i], $this->lastname[$i]);
        }
    }

    public function format($name, $lastname){
        echo "Nombre: " . $name . " - Apellido: " . $lastname. "<br>";
    }
}

$person = new persons();
$person->save("Frank", "Cedeno");
$person->save("Gabriela", "Cedeno");
$person->show();
