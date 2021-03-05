<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation','session'));
        $this->load->helper(array('auth/login_rules'));
        $this->load->model('ModelsUsers');
    }
    public function index(){
        $this->load->view('login','registro');
    }
    public function validate(){
        $this->form_validation->set_error_delimiters('','');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $rules = getLoginRules();
        $this->form_validation->set_rules($rules);
        if($this->form_validation->run() === FALSE){
            $this->output->set_status_header(400);
            $errors = array(
                'email' => form_error('email'),
                'password' => form_error('password'),
            );
            echo json_encode($errors);
        }else{
            $usr = $this->input->post('email');
            $pass = $this->input->post('password');
            if(!$res = $this->Auth->login($usr,$pass)){
                echo json_encode(array('msg' => 'Verifique sus credenciales'));
                $this->output->set_status_header(401);
                exit;
            }
            $data = array(
                'id' => $res->id,
                'nombre_usuarios' => $res->nombre_usuarios,
                'is_logged' => TRUE,
            );
            $this->session->set_userdata($data);
            $this->session->set_flashdata('msg','Bienvenido al sistema '.$data['nombre_usuarios']);
            echo json_encode(array("url" => base_url('dashboard')));
        }
    }
    public function logout(){
        $vars = array('id','nombre_usuario','is_logged');
        $this->session->unset_userdata($vars);
        $this->session->sess_destroy();
        redirect('login');
    }
}
