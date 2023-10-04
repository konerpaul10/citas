<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Referidos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view("header");
        $this->load->view("referidos/index");
        $this->load->view("footer");
    }
}//Cierre de 