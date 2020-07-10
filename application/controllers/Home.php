<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	
	public function __construct()
	{
		parent::__construct();
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
}
