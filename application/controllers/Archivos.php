<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archivos extends CI_Controller {
    
    public function __construct()
	{
		parent:: __construct();
        $this->load->library(array('form_validation','session'));
        $this->load->helper(array('download'));
        $this->load->model('Upload');
        
    }
    public function index(){
        $data ['error'] ="";
        $data ['errorArch'] ="";
        $data ['estado'] ="";
        $data ['archivo'] ="";
        $this->load->view('layout/head');
        $this->load->view('layout/menu');
        $this->load->view('archivos', $data);
        $this->load->view('layout/footer');

    }
    public function subirImagen(){
        $config['upload_path'] = './uploads/Imagenes';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '2024';
        $config['max_heigth'] = '2008';

        $this->load->library('upload',$config);

        if(!$this->upload->do_upload("fileImagen")){
            $data['error'] = $this->upload->display_errors();
            $this->load->view('layout/head');
            $this->load->view('layout/menu');
            $this->load->view('archivos', $data);
            $this->load->view('layout/footer');
        }else{

            $file_info =$this->upload->data();

            $this->crearMiniatura($file_info["file_name"]);
            $titulo = $this->input->post('titImagen');
            $imagen = $file_info['file_name'];
            $subir = $this->mupload->subir($titulo,$imagen);
            $data['titulo'] = $titulo;
            $data['imagen'] = $imagen;

            $this->load->view('layout/head');
            $this->load->view('layout/menu');
            $this->load->view('Imagen/imagenSubida', $data);
            $this->load->view('layout/footer');

        }
    }
    public function crearMiniatura($filename){
        $config['image_libary'] = 'gd2';
        $config['source_image'] = 'uploads/imagenes/'.$filename;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['new_image'] = 'uploads/imagenes/thumbs/';
        $config['thumb_marker'] = '';
        $config['width'] = 150;
        $config['heigth'] = 150;
        $this->load->library('image_lib',$config);
        $this->image_lib->reslize();
    }
    public function subirArchivo(){
        $config['upload_path'] = 'uploads/Archivos';
        $config['allowed_types'] = 'pdf|xlsx|docx';
        $config['max_size'] = '20048';

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('fileImagen')){
            $data['errorArch'] = $this->upload->display_errors();
            $this->load->view('layout/head');
            $this->load->view('layout/menu');
            $this->load->view('archivos', $data);
            $this->load->view('layout/footer');
            
        }else{
            $file_info = $this->upload->data();

            $titulo = $this->input->post('titImagen');
            $archivo = $file_info['file_name'];
            $subir = $this->mupload->subir($titulo,$archivo);
            $data['estado'] = "Archivo subido";
            $data['archivo'] = $archivo;
            $data['error'] = "";
            $data['errorArch'] = "";

            $this->load->view('layout/head');
            $this->load->view('layout/menu');
            $this->load->view('archivos', $data);
            $this->load->view('layout/footer');

        }

    }
    public function downloads($name){
        $data = file_get_contents('./uploads/Archivos/'.$name);
        force_download($name, $data);
    }
}    