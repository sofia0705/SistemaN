<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function vistas(){
		$data['Titutlo'] = 'Desde la vista';
		$data['Lista'] = array('rosa','azul','verde');
		$this->load->view('vistas',$data);
		$this->load->view('imprimir');
	}
}
