<?php

namespace Controllers;

use Models\Estudiante as Estudiante;
use Models\Seccion as Seccion;

class estudiantesController
{
    /**
     * @var Estudiante
     */
    private $estudiante;
    /**
     * @var Seccion
     */
    private $seccion;

    /**
     * estudiantesController constructor.
     */
    public function __construct()
    {
        $this->estudiante = new Estudiante();
        $this->seccion = new Seccion();
    }

    /**
     * @return bool|\mysqli_result
     */
    public function index()
    {
        $datos = $this->estudiante->listar();
        return $datos;
    }

    /**
     * @return bool|\mysqli_result
     */
    public function add()
    {
        if (!$_POST) {
            $datos = $this->seccion->listar();
            return $datos;
        } else {
            $permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
            $limite = 700;
            if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024) {
                $name = date('is') . $_FILES['imagen']['name'];
                $path = "Views" . DS . "template" . DS . "images" . DS . "avatars" . DS . $name;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $path);
                $this->estudiante->set("nombre", $_POST['name_f']);
                $this->estudiante->set("edad", $_POST['age_f']);
                $this->estudiante->set("promedio", $_POST['average_f']);
                $this->estudiante->set("password", $_POST['password_f']);
                $this->estudiante->set("imagen", $name);
                $this->estudiante->set("id_seccion", $_POST['seccion_f']);
                $this->estudiante->add();
                header("Location: " . URL . "estudiantes");
            }
        }
    }

    public function edit($id)
    {
        if (!$_POST) {
            $this->estudiante->set("id", $id);
            $datos = $this->estudiante->view();
            return $datos;
        } else {
            $this->estudiante->set("nombre", $_POST['name_f']);
            $this->estudiante->set("edad", $_POST['age_f']);
            $this->estudiante->set("promedio", $_POST['average_f']);
            $this->estudiante->set("id_seccion", $_POST['seccion_f']);
            $this->estudiante->set("id", $_POST['id_f']);
            $this->estudiante->edit();
            header("Location: " . URL . "estudiantes");
        }
    }

    public function listSections()
    {
        $datos = $this->seccion->listar();
        return $datos;
    }

    public function view($id)
    {
        $this->estudiante->set("id", $id);
        $datos = $this->estudiante->view();
        return $datos;
    }

    public function delete($id)
    {
        $this->estudiante->set('id', $id);
        $this->estudiante->delete();
        header('Location:' . URL . 'estudiantes');
    }
}


$students = new estudiantesController();