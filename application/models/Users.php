<?php
class Users extends CI_Model{
    function __construct()
    {
        $this->load->database();
    }
    public function create($datos){
        $datos = array(
            'nombre_usuarios' => $datos ['nombre_usuarios'],
            'correo' => $datos ['correo'],
            'contrasena' => $datos ['contrasena'],
        );
      if(!$this->db->insert('Usuarios', $datos)){
          return false;
      }
          return true;
    }
}