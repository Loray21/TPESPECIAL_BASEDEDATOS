<?php
require_once('controller.php');

require_once('Router.php');
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$r = new Router();


/*ruta que lista el top de 10 de usuarios*/
$r->addRoute("TOP10", "GET", "controller", "TOP10");

//buscador
$r->addRoute("buscar", "GET", "controller", "buscar");


//usuarios con sus datos de eventos
$r->addRoute("buscar_eventos", "GET", "controller", "buscar_eventos");


//pag principal
$r->addRoute("inicio", "GET", "controller", "inicio");


//ruta por defecto 
$r->setDefaultRoute("controller", "inicio");


$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 

//ruta por defecto 
