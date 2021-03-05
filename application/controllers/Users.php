<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation','email'));
        $this->load->helper(array('users/users_rules','string'));
        $this->load->model('ModelsUsers');
    }
    public function index(){
        echo 'Tablas de Usuarios';
    }
    
    public function create(){
        $vista = $this->load->view('registro','',true);
        $this->getTemplate($vista);
    }
    
    public function store(){
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        
        

        $this->form_validation->set_rules(getCreateUserRules());
        
        if($this->form_validation->run() == FALSE){
            $this->output->set_status_header(400);
        }else {
            $user = array(
                'password' => $password,
                'contrasena' => random_string('alnum',8),
                'email' => $email,
                
            );
            
            $user_info = array(
                'nombre' => $name,
                'apellidos' => $lastname,
                
               
                
            );
            
            
            if(!$this->ModelsUsers->save($user,$user_info)){
                $this->output->set_status_header(500);
            }else{
                $this->sendEmail($user);
                $this->session->set_flashdata('msg','El usuario a sido registrado'); 
                redirect(base_url('users'));
            }


        }

        $vista = $this->load->view('registro','',true);
        $this->getTemplate($vista); 
    }
   
    public function sendEmail($data){

        $this->email->from('sistema@example.com', 'Sistemdev');
        $this->email->to($data['correo']);

        $this->email->subject('Datos de cuenta');

        $this->email->message('Testing the email class.');

        $this->email->send();
    }
    public function getTemplate($view){
        $data = array(
            'head' => $this->load->view('layout/head','',TRUE),
            'nav' => $this->load->view('layout/nav','',TRUE),
            'aside' => $this->load->view('layout/aside','',TRUE),
            'content' => $view,
            'footer' => $this->load->view('layout/footer','',TRUE),
        );
        $this->load->view('dashboard',$data);
    }
}
