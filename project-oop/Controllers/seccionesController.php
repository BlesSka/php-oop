<?php

namespace Controllers;

use Models\Seccion as Seccion;

class seccionesController
{

    private $secciones;

    public function __construct()
    {
        $this->secciones = new Seccion();
    }

    public function index()
    {
        $datos = $this->secciones->listar();
        return $datos;
    }

    public function add()
    {
        if ($_POST) {
            $this->secciones->set("nombre", $_POST['name_f']);
            $this->secciones->add();
            // header('Location:' . URL . "secciones");
            
        } else {
            $errors[] = "Please give a name";
        }
    }

    public function edit($id)
    {
        if (!$_POST) {
            $this->secciones->set('id', $id);
            $datos = $this->secciones->view();
            return $datos;
        } else {
            $this->secciones->set("id", $id);
            $this->secciones->set("nombre", $_POST['name_f']);
            $this->secciones->edit();
            header('Location:' . URL . "secciones");
        }
    }

    public function view($id) {
        $this->secciones->set('id', $id);
        $datos = $this->secciones->view();
        return $datos;
    }

    public function delete($id)
    {
        $this->secciones->set('id', $id);
        $this->secciones->delete();
        header('Location:' . URL . 'secciones');
    }
//    public function ver($num = "")
//    {
//        print "Eres el numero " . $num;
//    }
}