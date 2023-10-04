<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sociales extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view("header");
        $this->load->view("sociales/index");
        $this->load->view("footer");
    }
}//Cierre de 