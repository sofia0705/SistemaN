<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('users/users_rules'));
        
    }
    public function create(){
       $vista = $this->load->view('admin/create_users','',TRUE);
       $this->getTemplate($vista);


    }
    public function store(){
        $user = $this->input->post('user');
        $correo = $this->input->post('correo');
        $range = $this->input->post('range');
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $area = $this->input->post('area');
        $departemento = $this->input->post('departamento');
        $folio = $this->input->post('folio');

        $this->form_validation->set_rules(getCreateUserRules());
        if($this->form_validation->run() == FALSE){

        }else{
            $this->session->set_flashdata('msg','El usuario a sido registrado');
            redirect(base_url('users'));
        }

        $vista = $this->load->view('admin/create_users','',TRUE);
        $this->getTemplate($vista);
    }
    public function getTemplate($view){
        $data = array(
            'head' => $this->load->view('layout/head','', TRUE),
            'nav' => $this->load->view('layout/nav','', TRUE),
            'aside' => $this->load->view('layout/aside','', TRUE),
            'content' => $view,
            'footer' => $this->load->view('layout/footer','', TRUE)
            
        );
       
        $this->load->view('dashboard', $data);

    }
}