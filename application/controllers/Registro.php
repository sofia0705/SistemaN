<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    
    public function __construct()
	{
		parent:: __construct();
        $this->load->helper(array('getmenu','users/users_rules'));
        $this->load->model('Users');

        $this->load->library(array('form_validation'));

        
	}

    public function index(){
        $data['menu'] = main_menu();
        $this->load->view('Registro',$data);
        
        
    }

   
}