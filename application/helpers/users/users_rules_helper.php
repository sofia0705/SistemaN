<?php
if(!function_exists('getCreateUserRules')){
    function getCreateUserRules(){
        return array(
            array(
                    'field' => 'password',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => 'El %s es requerido.',
                        'max_length' => 'El %s es demaciado grande.'
                ),
                    
            ),
            array(
                    'field' => 'email',
                    'rules' => 'required|valid_email',
                    'errors' => array(
                            'required' => 'El %s es requerido.',
                            'valid_email' => 'El %s tiene que contener una direccion valida.'
                    ),
                ),   
                
                array(
                    'field' => 'name',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => 'El %s es requerido.',
                    ),
                ),
                array(
                    'field' => 'lastname',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => 'El %s es requerido.',
                    ),
                ),  
                 
        );
    }

}




