<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('BannerModel');
    }

    //Cargar la vista de todos los banners creados
    public function index()
    {
        $banners = $this->BannerModel->getBanners();
        $this->load->view('template/cabecera_admin');
        $this->load->view('banner/index',compact('banners'));
        $this->load->view('template/piedepagina_admin');
    }

    //Carga el formulario para crear [NUEVO BANNER]
    public function nuevo()
    {
        $this->load->view('template/cabecera_admin');
        $this->load->view('banner/nuevo');
        $this->load->view('template/piedepagina_admin');
    }
    
    
    public function guardar()
    {
        $this->form_validation->set_rules('titulo','Titulo','required');
        $this->form_validation->set_rules('descripcion','Descripcion','required');
        $this->form_validation->set_rules('precio','Precio','required');
        $this->form_validation->set_rules('texto','Texto','required');
        //$this->form_validation->set_rules('imagen1','Imagen 1','required');
        //$this->form_validation->set_rules('imagen2','Imagen 2','required');
        
        if($this->form_validation->run() == TRUE)
        {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2000';
            $config['max_width'] = '2024';
            $config['max_height'] = '2008';
            $this->load->library('upload', $config);
            echo("PASO 1");
            if ( ! $this->upload->do_upload("imagen1") )
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('template/cabecera_admin');
                //$this->load->view('banner/error', $error);
                print_r($error);
                $this->load->view('template/piedepagina_admin');
                echo("PASO 2");
            }
            else
            {
                    echo("PASO 3");
                    $file_info = $this->upload->data();
                    print_r($file_info);
                    $titulo = $this->input->post('titulo');
                    $descripcion = $this->input->post('descripcion');
                    $texto = $this->input->post('texto');
                    $precio = $this->input->post('precio');
                    $imagen1 = $file_info['file_name'];
                    //$imagen2 = $file_info[''];
                    $this->BannerModel->guardar($titulo, $descripcion, $texto, $precio, $imagen1);
                    //$subir = $this->mupload->subir($titulo,$imagen1);
                    echo("PASO 4");
            }
        }else{
        //SI EL FORMULARIO NO SE VÁLIDA LO MOSTRAMOS DE NUEVO CON LOS ERRORES
            //$this->index();
            echo("Error en formulario 2");
        }

    }

}