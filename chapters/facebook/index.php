<?php
    class Facebook
    {
//        Attributes
    public $name;
    public $age;
    private $pass;

//        Methods
    public function __construct($name, $age, $pass)
    {
        $this->name = $name;
        $this->age = $age;
        $this->pass = $pass;

    }

    public function showInformation()
    {
        echo "Nombre: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        self::changePass("0000001");
        echo "Password: " . $this->pass . "<br>";
    }

    private function changePass($newPass)
    {
        $this->pass = $newPass;
    }
}

    $facebook = new Facebook('Frank Cedenho', 30, "123456");
    $facebook->showInformation();
//LOS PROTECTE Y LOS PRIVATE NO PUEDEN SER ACCEDIDOS MEDIANTE EL OBJETO; Solo pueden ser accedidos mediante en metodo
// de la misma Clase no mediante un objeto.
//    echo $facebook->name;
