<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('BannerModel');
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		
		$banners = $this->BannerModel->getBanners();
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();
		
		$this->load->view('template/cabecera');
		$this->load->view('template/carousel',compact('banners'));
		$this->load->view('template/proyectos_card',compact('proyectos'));
		$this->load->view('template/noticias_card',compact('noticias'));
		$this->load->view('template/footer',compact('proyectos','noticias'));
		$this->load->view('template/piedepagina');
	}

	public function quienesomos()
	{
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();

		$this->load->view('template/cabecera');
		$this->load->view('template/quienesomos');
		$this->load->view('template/footer',compact('proyectos','noticias'));
		$this->load->view('template/piedepagina');			
	}

	public function financiamiento()
	{
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();

		$this->load->view('template/cabecera');
		$this->load->view('template/financiamiento');
		$this->load->view('template/footer',compact('proyectos','noticias'));
		$this->load->view('template/piedepagina');		
	}

	public function contactos()
	{
		$this->load->view('template/cabecera');
		$this->load->view('template/contactos');
		$this->load->view('template/piedepagina');		
	}

	public function nuestrosproyectos()
	{
		$this->load->model('ProyectosModel');
		$proyectos = $this->ProyectosModel->getProyectos();
		$this->load->view('template/cabecera');
		$this->load->view('template/nuestrosproyectos',compact('proyectos'));
		$this->load->view('template/piedepagina');
	}

	public function noticias()
	{
		$this->load->model('NoticiasModel');
		$noticias = $this->NoticiasModel->getNoticias();
		$this->load->view('template/cabecera');
		$this->load->view('template/noticias',compact('noticias'));
		$this->load->view('template/piedepagina');
	}

	public function login()
	{
		$this->load->view('template/cabecera');
		$this->load->view('template/login');
		$this->load->view('template/piedepagina');
	}
	
	public function admin()
	{
		$this->load->view('template/cabecera_admin');
        $this->load->view('template/piedepagina_admin');
	}

	public function ingresar()
	{
		$this->form_validation->set_rules('usuario','Usuario','required');  
		$this->form_validation->set_rules('password','password','required');
        if($this->form_validation->run() == TRUE)
        {   
			$usuario = $this->input->post('usuario');
			$password = $this->input->post('password');
			if($usuario == "admin_econ" && $password == "adminECON"){
				$this->admin();
			}
			else{
				$this->index();	
			}

        }else{
            $this->login();
        }	
	}

	

	

}
