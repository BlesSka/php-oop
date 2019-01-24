<?php

    namespace Config;
    
    class Enrutador
    {
        public static function run(Request $request)
        {
           $controlador = $request->getControlador() . "Controller";
           $ruta = ROOT . "Controllers" . DS . $controlador . ".php";
           $metodo = $request->getMetodo();
           if ($metodo == "index.php"){
               $metodo = "index";
           }
           $argumento = $request->getArgumento();
           if(is_readable($ruta)){
               require_once $ruta;
               $mostrar = "Controllers\\" . $controlador;
               $controlador = new $mostrar;
               if(!isset($argumento)){
                   call_user_func(array($controlador, $metodo));
               }else{
                   call_user_func_array(array($controlador, $metodo),$argumento);
               }
           }

//           Carga Vista
           $new = $request->getMetodo();
           if ($new == "index.php"){
               $new = "index";
           }
           $ruta = ROOT . "Views" . DS . $request->getControlador() . DS . $request->getMetodo() . ".php";
//           print $ruta;
           if (is_readable($ruta)){
               require_once $ruta;
//               print $ruta;
           }else{
               print "No se encontro la Ruta";
           }

        }
    }

//    if (isset($_GET['url'])) {
//        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
//        $url = explode("/", $url);
//        $url = array_filter($url);
//        print_r($url);
//    }
