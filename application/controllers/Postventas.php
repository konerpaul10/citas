<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Postventas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view("header");
        $this->load->view("postventas/index");
        $this->load->view("footer");
    }
}//Cierre de 