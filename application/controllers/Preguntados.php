<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preguntados extends CI_Controller {
    public function index()
	{

		$this->layout->view('preguntados.view.php');
		
    }
}