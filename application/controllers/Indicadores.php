<?php
    class Indicadores extends CI_Controller{
      public function __construct(){
        parent::__construct();
        //MODELO CLIENTE
        $this->load->model("cliente");
        $this->load->model("pais");
        //validando si alguien esta conectado
        if ($this->session->userdata('c0nectadoUTC')) {
          //SI ESTA CONECTADO
          // code...
        } else {
          redirect('seguridades/formularioLogin');
        }

      }

      public function index(){
        $this->load->view("header");
        $this->load->view("indicadores/index");
        $this->load->view("footer");
      }


    }//cierre de la clase


 ?>
