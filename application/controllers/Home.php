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
		print_r($this->usuario_model->getUsuario('6945027'));
		// $this->layout->view('home.view.php');
		
	}
}
