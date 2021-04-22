<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Denuncias extends CI_Controller
{

	public function create()
	{
		$this->load->model("Denuncias_model");
		//$session_data = $this->session->userdata('datos_usuario');
		//$idUser = $session_data['idUser'];
		foreach ($this->input->post("canal") as $canal) {
			$data = array(
				"IdCaso" => $this->input->post("idCaso"),
				"IdCanal" => $canal,
				"Estado" => 0
			);
			$res = $this->Denuncias_model->create($data);
			if ($res) {
				echo 'ok';
			} else {
				echo 'error';
			}
		}
	}
}
