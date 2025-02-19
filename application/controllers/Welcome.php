<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Persona');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function agregar(){
		$persona['nombre'] = $this->input->post('nombre');
		$persona['apellido_paterno'] = $this->input->post('apellido_paterno');
		$persona['apellido_materno'] = $this->input->post('apellido_materno');
		$persona['fecha_nacimiento'] = $this->input->post('fecha_nacimiento');
		$persona['sexo'] = $this->input->post('sexo');

		$this->Persona->agregar($persona);
		redirect('welcome');
	}
	
}
