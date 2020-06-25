<?php

    require_once('libs/Smarty.class.php');

    class view {
        private $smarty;




        function __construct(){
            $this->smarty = new Smarty();
        }

//funcion top 10 usuarios-view
        public function DisplayUsuarios($usuarios){
            $this->smarty->assign('top10_usuarios',$usuarios);
            $this->smarty->display('templates/index.tpl');
        }

        //funcion inicio
        public function inicio(){
            $this->smarty->display('templates/inicio.tpl');
        }
    

    // funcion para mostrar buscar
    public function buscar(){
        $this->smarty->display('templates/busqueda.tpl');
    }
    public function buscar_eventos($usuarios_eventos){
        $this->smarty->assign('usuarios',$usuarios_eventos);
        $this->smarty->display('templates/busqueda_eventos.tpl');
    }
}

