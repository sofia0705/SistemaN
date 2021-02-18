<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    
    public function __construct()
	{
		parent:: __construct();
        $this->load->helper(array('getmenu'));
        $this->load->model('Users');

        $this->load->library(array('form_validation'));

        
	}

    public function index(){
        $data['menu'] = main_menu();
        $this->load->view('Registro',$data);
        
        
    }

    public function create(){
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password_c = $this->input->post('password_confirm');

        $config = array(
            array(
                    'field' => 'username|alpha_numeric',
                    'label' => 'Nombre de usuario',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'email',
                    'label' => 'correo',
                    'rules' => 'required|valid_email',
                    'errors' => array(
                            'required' => 'El %s es invalido.',
                    ),
            ),
            
    );
    
    $this->form_validation->set_rules($config);

       if ($this->form_validation->run() == FALSE)
       {
           $data['menu'] = main_menu();
           $this->load->view('registro',$data);
        } else {
            $datos = array(
                'nombre_usuarios' => $username,
                'correo' => $email,
                'contrasena' => $password,
            );
    
            $data['menu'] = main_menu();
            if(!$this->Users->create($datos)){
                $data['msg'] = 'Ocurrio un error al ingresar los datos por favor intente mas tarde';
                $this->load->view('registro', $data);
            }
                $data['msg'] = 'Registrado correctamente!';
                $this->load->view('registro', $data);

        }

        


     
    }
}