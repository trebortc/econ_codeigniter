<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyectos extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('ProyectosModel');
        $this->load->model('ImagenModel');
    }

    //Cargar la vista de todos los banners creados
    public function index($mensaje = "BIENVENIDO")
    {
        $proyectos = $this->ProyectosModel->getProyectos();
        $this->load->view('template/cabecera_admin');
        $this->load->view('proyectos/index',compact('proyectos','mensaje'));
        $this->load->view('template/piedepagina_admin');
    }

    //Carga el formulario para crear [NUEVA NOTICIA]
    public function nuevo()
    {
        $this->load->view('template/cabecera_admin');
        $this->load->view('proyectos/nuevo');
        $this->load->view('template/piedepagina_admin');
    }
    
    public function ver($id)
    {   
        $proyecto = $this->ProyectosModel->ver($id);
        $this->load->view('template/cabecera');
		$this->load->view('proyectos/ver_proyecto',compact('proyecto'));
		$this->load->view('template/piedepagina');	
    }

    public function eliminar($id)
    {
        $this->ProyectosModel->eliminar($id);
        $proyectos = $this->ProyectosModel->getProyectos();
        $mensaje = "Dato eliminado con exito";
        $this->load->view('template/cabecera_admin');
        $this->load->view('proyectos/index',compact('proyectos','mensaje'));
        $this->load->view('template/piedepagina_admin'); 
    }

    public function guardar()
    {
        $this->form_validation->set_rules('titulo','Titulo','required');
        $this->form_validation->set_rules('descripcion','Descripcion','required');
        $this->form_validation->set_rules('fecha','Fecha','required');
        $this->form_validation->set_rules('texto','Texto','required');
        $this->form_validation->set_rules('tipo','Tipo','required');
        
        if($this->form_validation->run() == TRUE)
        {         
            try{
                $imagen1 = $this->ImagenModel->cargarImagenServidor('imagen1');
                $imagen2 = $this->ImagenModel->cargarImagenServidor('imagen2');
                $imagen3 = $this->ImagenModel->cargarImagenServidor('imagen3');
                $imagen4 = $this->ImagenModel->cargarImagenServidor('imagen4');
                $imagen5 = $this->ImagenModel->cargarImagenServidor('imagen5');
                $imagen6 = $this->ImagenModel->cargarImagenServidor('imagen6');
                if(is_null($imagen1) && is_null($imagen2) && is_null($imagen3) && is_null($imagen4) && is_null($imagen5) && is_null($imagen6))
                {
                    $this->index("Error al cargar imagenes"); 
                }
                else{
                    $titulo = $this->input->post('titulo');
                    $descripcion = $this->input->post('descripcion');
                    $precio = $this->input->post('precio');
                    $texto = $this->input->post('texto');
                    $fecha = $this->input->post('fecha');
                    $tipo = $this->input->post('tipo');
                    $this->ProyectosModel->guardar($titulo, $descripcion, $precio, $texto, $tipo, $fecha, $imagen1, $imagen2, $imagen3, $imagen4, $imagen5, $imagen6);
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
        $proyecto = $this->ProyectosModel->ver($id);       
        $this->load->view('template/cabecera_admin');
        $this->load->view('proyectos/editar',compact('proyecto'));
        $this->load->view('template/piedepagina_admin');
    }

    public function actualizar($id)
    {
        $this->form_validation->set_rules('titulo','Titulo','required');
        $this->form_validation->set_rules('descripcion','Descripcion','required');
        $this->form_validation->set_rules('fecha','Fecha','required');
        $this->form_validation->set_rules('texto','Texto','required');
        $this->form_validation->set_rules('tipo','Tipo','required');
        $this->form_validation->set_rules('precio','Precio','required');
        
        if($this->form_validation->run() == TRUE)
        {            
            $titulo = $this->input->post('titulo');
            $descripcion = $this->input->post('descripcion');
            $precio = $this->input->post('precio');
            $texto = $this->input->post('texto');
            $fecha = $this->input->post('fecha');
            $tipo = $this->input->post('tipo');
            $this->ProyectosModel->actualizar($id, $titulo, $descripcion, $precio, $texto, $tipo, $fecha);
            $this->index("Dato creado con exito"); 
        }else{
            $this->index("Debe llenar todos los campos");
        }
    }

}