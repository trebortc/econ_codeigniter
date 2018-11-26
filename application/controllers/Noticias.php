<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('NoticiasModel');
        $this->load->model('ImagenModel');
    }

    //Cargar la vista de todos los banners creados
    public function index($mensaje = "BIENVENIDO")
    {
        $noticias = $this->NoticiasModel->getNoticias();
        $this->load->view('template/cabecera_admin');
        $this->load->view('noticias/index',compact('noticias','mensaje'));
        $this->load->view('template/piedepagina_admin');
    }

    //Carga el formulario para crear [NUEVA NOTICIA]
    public function nuevo()
    {
        $this->load->view('template/cabecera_admin');
        $this->load->view('noticias/nuevo');
        $this->load->view('template/piedepagina_admin');
    }

    public function ver($id)
    {   
        $noticia = $this->NoticiasModel->ver($id);
        $this->load->view('template/cabecera');
		$this->load->view('noticias/ver_noticia',compact('noticia'));
		$this->load->view('template/piedepagina');	
    }
    
    public function eliminar($id)
    {
        $this->NoticiasModel->eliminar($id);
        $mensaje = "Dato eliminado con exito";
        $noticias = $this->NoticiasModel->getNoticias();
        $this->load->view('template/cabecera_admin');
        $this->load->view('noticias/index',compact('noticias','mensaje'));
        $this->load->view('template/piedepagina_admin'); 
    }

    public function guardar()
    {
        $this->form_validation->set_rules('titulo','Titulo','required');
        $this->form_validation->set_rules('descripcion','Descripcion','required');
        $this->form_validation->set_rules('fecha','Fecha','required');
        $this->form_validation->set_rules('texto','Texto','required');
        
        if($this->form_validation->run() == TRUE)
        {   
            try{
                $imagen1 = $this->ImagenModel->cargarImagenServidor('imagen1');
                $imagen2 = $this->ImagenModel->cargarImagenServidor('imagen2');
                if(is_null($imagen1) && is_null($imagen2))
                {
                    $this->index("Error al cargar imagenes");    
                }else{
                    $titulo = $this->input->post('titulo');
                    $descripcion = $this->input->post('descripcion');
                    $texto = $this->input->post('texto');
                    $fecha = $this->input->post('fecha');
                    $this->NoticiasModel->guardar($titulo, $descripcion, $texto, $fecha, $imagen1, $imagen2);
                    $this->index("Dato creado con exito");   
                }
            }catch(Exception $e){
                $this->index("Error en subir imagen");
            }    
        }else{
            $this->index("Debe llenar todos los campos");
        }

    }

    public function editar($id)
    {
        $noticia = $this->NoticiasModel->ver($id);       
        $this->load->view('template/cabecera_admin');
        $this->load->view('noticias/editar',compact('noticia'));
        $this->load->view('template/piedepagina_admin');
    }

    public function actualizar($id)
    {
        $this->form_validation->set_rules('titulo','Titulo','required');
        $this->form_validation->set_rules('descripcion','Descripcion','required');
        $this->form_validation->set_rules('fecha','Fecha','required');
        $this->form_validation->set_rules('texto','Texto','required');
        
        if($this->form_validation->run() == TRUE)
        {            
            $titulo = $this->input->post('titulo');
            $descripcion = $this->input->post('descripcion');
            $texto = $this->input->post('texto');
            $fecha = $this->input->post('fecha');
            $this->NoticiasModel->actualizar($id,$titulo, $descripcion, $texto, $fecha);
            $this->index("Dato creado con exito"); 
        }else{
            $this->index("Debe llenar todos los campos");
        }
    }

}