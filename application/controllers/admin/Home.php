<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Administración directorio activo';
		$this->load->view('admin/home', $data);
	}
}
