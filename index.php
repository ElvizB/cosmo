<?php

//$componentes_url = parse_url($_SERVER['REQUEST_URI']);
$componentes_url = parse_url($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);


$ruta = $componentes_url['path'];

$partes_ruta = explode('/', $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);

$ruta_elegida = 'vistas/404.php';

if($partes_ruta[0] == 'cossmo.herokuapp.com'){
  if (count($partes_ruta) == 1){
    $ruta_elegida = 'vistas/home.php';
  }
}

include_once $ruta_elegida;