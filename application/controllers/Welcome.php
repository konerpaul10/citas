<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		//validando si alguien esta conectado
		if ($this->session->userdata('c0nectadoUTC')) {
			//SI ESTA CONECTADO
			// code...
		} else {
			redirect('seguridades/formularioLogin');
		}
		$this->load->view("header.php");
		$this->load->view('welcome_message');
		$this->load->view("footer.php");
	}
}//CIERRE DE LA CLASE
