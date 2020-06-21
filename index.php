<?php

//$componentes_url = parse_url($_SERVER['REQUEST_URI']);

$componentes_url = parse_url($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
//cosmosomos.herokuapp.com

$ruta = $componentes_url['path'];

$partes_ruta = explode('/', $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);

$ruta_elegida = 'vistas/404.php';

if($partes_ruta[0] == 'cosmosomos.herokuapp.com'){
  if (count($partes_ruta) == 1){
    $ruta_elegida = 'vistas/home.php';
  }else if (count($partes_ruta) == 2){
    switch($partes_ruta[1]){
      case 'sobre-nosotros':
        $ruta_elegida = 'vistas/sobre-nosotros.php';
        break;   
      case 'proyectos':
        $ruta_elegida = 'vistas/proyectos.php';
        break;       
    }
  }
}

include_once $ruta_elegida;