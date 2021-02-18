<?php
class Auth extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function login($usr, $pass){
       $data =  $this->db->get_where('Usuarios', array ('correo' => $usr, 'contrasena' => $pass),1);
        if(!$data->result()){
            return false;
        }
        return $data->row();
    }
}
