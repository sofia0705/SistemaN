<?php
if(!function_exists('getCreateUserRules')){
    function getCreateUserRules(){
        return array(
            array(
                    'field' => 'user',
                    'label' => 'Usuario',
                    'rules' => 'required|max_length[100]',
                    'errors' => array(
                        'required' => 'El %s es requerido.',
                        'max_length' => 'El %s es demaciado grande.'
                ),
                    
            ),
            array(
                    'field' => 'correo',
                    'label' => 'Correo',
                    'rules' => 'required|valid_email',
                    'errors' => array(
                            'required' => 'El %s es requerido.',
                            'valid_email' => 'El %s tiene que contener una direccion valida.'
                    ),
                ),   
                array(
                    'field' => 'range',
                    'label' => 'Rango',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => 'El %s es requerido.',
                    ),
                ),
                array(
                    'field' => 'name',
                    'label' => 'Nombre',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => 'El %s es requerido.',
                    ),
                ),
                array(
                    'field' => 'lastname',
                    'label' => 'Apellidos',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => 'El %s es requerido.',
                    ),
                ),  
                array(
                    'field' => 'area',
                    'label' => 'Area',
                    'rules' => 'required|valid_email',
                    'errors' => array(
                            'required' => 'El %s es requerido.',
                            
                    ),
                ),
                array(
                    'field' => 'departamento',
                    'label' => 'Departamento',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => 'El %s es requerido.',
                            
                    ),
                ), 
                array(
                    'field' => 'folio',
                    'label' => 'Folio',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => 'El %s es requerido.',
                            
                    ),
                ),         
        );
    }

}




