<?php
    //constructor
    class Pais extends CI_Model{
      //funcion constructor
        public function __construct(){
            parent:: __construct();
        }

        //funcion para consultar Pais
        public function consultarTodos(){
          //variable
            $listadoPaises=$this->db->get('pais');
            if ($listadoPaises->num_rows()>0) {
                // Cuando si hay paises registrados
                return $listadoPaises;
            } else {
                //cuando no hay paises
                return false;
            }
        }
    }//cierre llave

 ?>
