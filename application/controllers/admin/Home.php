<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


	public function index()
	{
		$session_data = $this->session->userdata('datos_usuario');
		if (!$session_data) {
			redirect(base_url());
		}
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Administración directorio activo';
		$this->load->view('admin/home', $data);
	}
}
