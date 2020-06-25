<?php

    class model {

        private $db;

        function __construct(){
            $this->db = new PDO('pgsql:host=dbases.exa.unicen.edu.ar;'.'dbname=cursada;'.'port=6432;'.'user=unc_249381;'.'password=249381;');
        }

//funcion top 10 usuarios model
        public function get_usuarios(){
            // prepara la consulta
            $sentencia = $this->db->prepare( "select u.nombre,u.apellido 
            from
            gr23_usuario u
            join gr23_evento e on (u.gr23_id_usuario = e.gr23_id_usuario)
            group by e.gr23_id_usuario,u.nombre,u.apellido
            order by  count(*) desc
            limit 10;");
            // ejecuta la consulta
            var_dump($sentencia->errorinfo());
            $sentencia->execute();
            // obtiene los resultados en un arreglo ($productos es un arreglo de productos)
            $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $usuarios;
        }
   

    public function buscar_eventos($nombre_evento){
        var_dump($nombre_evento);
        $sentencia = $this->db->prepare("SELECT U.NOMBRE,U.APELLIDO,count(e.gr23_id_usuario)
        FROM gr23_usuario u
        join gr23_evento e on(u.gr23_id_usuario=e.gr23_id_usuario)
        join gr23_evento_edicion ee on e.gr23_id_evento = ee.gr23_id_evento
        where e.nombre_evento= ?
        group by e.gr23_id_usuario,u.APELLIDO, U.NOMBRE");
        $sentencia->execute(array($nombre_evento));
        //var_dump($sentencia->errorinfo());
        $bla=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $bla;

    
    }
}
