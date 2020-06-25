<?php
require_once 'model.php';
require_once "view.php";


class controller{
private $model;
private $view;

function __construct(){
    $this->model = new model();
    $this->view = new view();

}


public function inicio(){
    $this->view->inicio();
}

//funcion top 10 usuarios
        public function TOP10(){
            $usuarios = $this->model->get_usuarios();
            $this->view->DisplayUsuarios($usuarios);
        }


    /*funcion para buscar eventos*/
    public function buscar(){
        $this->view->buscar();
    
    }
    //usuarios con sus datos de eventos
    public function buscar_eventos(){
        $nombre_evento= $_GET['nombre_evento'];
        $usuarios_eventos = $this->model->buscar_eventos($nombre_evento);
        var_dump($usuarios_eventos);
        $this->view->buscar_eventos($usuarios_eventos);


}
}
