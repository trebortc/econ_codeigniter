<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('BannerModel');
        $this->load->model('ImagenModel');
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
        
        if($this->form_validation->run() == TRUE)
        {            
            $imagen1 = $this->ImagenModel->cargarImagenServidor('imagen1');
            $imagen2 = $this->ImagenModel->cargarImagenServidor('imagen2');

                $titulo = $this->input->post('titulo');
                $descripcion = $this->input->post('descripcion');
                $texto = $this->input->post('texto');
                $precio = $this->input->post('precio');
                $this->BannerModel->guardar($titulo, $descripcion, $texto, $precio, $imagen1, $imagen2);
                $this->index();

        }else{
            $this->index();
        }

    }

}