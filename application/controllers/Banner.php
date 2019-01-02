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
    public function index($mensaje ="BIENVENIDO")
    {
        $banners = $this->BannerModel->getBanners();
        $this->load->view('template/cabecera_admin');
        $this->load->view('banner/index',compact('banners','mensaje'));
        $this->load->view('template/piedepagina_admin');
    }

    //Carga el formulario para crear [NUEVO BANNER]
    public function nuevo()
    {
        $this->load->view('template/cabecera_admin');
        $this->load->view('banner/nuevo');
        $this->load->view('template/piedepagina_admin');
    }

    public function ver($id)
    {   
        $banner = $this->BannerModel->ver($id);
        $this->load->view('template/cabecera');
		$this->load->view('banner/ver_banner',compact('banner'));
		$this->load->view('template/piedepagina');	
    }
    
    
    public function guardar()
    {
        $this->form_validation->set_rules('titulo','Titulo','required');
        $this->form_validation->set_rules('descripcion','Descripcion','required');
        $this->form_validation->set_rules('precio','Precio','required');
        $this->form_validation->set_rules('texto','Texto','required');
        
        if($this->form_validation->run() == TRUE)
        {            
            try{
                $imagen1 = $this->ImagenModel->cargarImagenServidor('imagen1');
                if(is_null($imagen1))
                {
                    $this->index("Error al cargar imagen");    
                }else{
                    $titulo = $this->input->post('titulo');
                    $descripcion = $this->input->post('descripcion');
                    $texto = $this->input->post('texto');
                    $precio = $this->input->post('precio');
                    $this->BannerModel->guardar($titulo, $descripcion, $texto, $precio, $imagen1);
                    $this->index("Dato creado con exito");            
                }
            }catch(Exception $e){
                $this->index("Error en subir imagen");
            }
        }else{

            $this->index("Debe llenar todos los campos");
        }
    }

    public function eliminar($id)
    {
        $this->BannerModel->eliminar($id);
        $banners = $this->BannerModel->getBanners();
        $mensaje = "Dato eliminado con exito";
        $this->load->view('template/cabecera_admin');
        $this->load->view('banner/index',compact('banners','mensaje'));
        $this->load->view('template/piedepagina_admin'); 
    }

    public function editar($id)
    {
        $banner = $this->BannerModel->getBanner($id);       
        $this->load->view('template/cabecera_admin');
        $this->load->view('banner/editar',compact('banner'));
        $this->load->view('template/piedepagina_admin');
    }

    public function actualizar($id)
    {
        $this->form_validation->set_rules('titulo','Titulo','required');
        $this->form_validation->set_rules('descripcion','Descripcion','required');
        $this->form_validation->set_rules('precio','Precio','required');
        $this->form_validation->set_rules('texto','Texto','required');
        
        if($this->form_validation->run() == TRUE)
        {            
            $titulo = $this->input->post('titulo');
            $descripcion = $this->input->post('descripcion');
            $texto = $this->input->post('texto');
            $precio = $this->input->post('precio');
            $this->BannerModel->actualizar($id,$titulo, $descripcion, $texto, $precio);
            $this->index("Dato creado con exito"); 

        }else{
            $this->index("Debe llenar todos los campos");
        }
    }

}