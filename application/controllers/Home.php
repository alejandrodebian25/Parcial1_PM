<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	
	public function __construct()
	{
		parent::__construct();
		//ruta privada
		if(!$this->session->userdata('ci'))
			redirect(base_url('login'));
		
		$this->load->model('usuario_model');
	}


	public function index()
	{
		//obt datos de la sesion 
		$ci = $this->session->ci;
		// obt datos de la bd
		$data=$this->usuario_model->getUsuario($ci);
		// print_r($data);
		$this->layout->view('home.view.php',$data);
		
	}
	public function cambiarcolor(){
		$color = $this->input->post('color');
		//obt datos de la sesion 
		$ci = $this->session->ci;
		
		$this->usuario_model->setColorUsuario($ci,$color);
		// echo "$color";
		redirect(base_url('home'));
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
