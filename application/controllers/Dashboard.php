<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library(array('session'));
    }
    public function index(){
        if($this->session->userdata('is_logged')){
            $vista = $this->load->view('admin/show_users','login', 'registro', 'archivos','tablares',TRUE);
            $this->getTemplate($vista);

            

        }else{
            show_404();
        }
        
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