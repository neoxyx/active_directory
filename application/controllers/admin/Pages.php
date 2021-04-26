<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{


	public function index()
	{
		$this->load->model(array('CategoriasNoUniformado_model', 'CategoriasOficial_model', 'CategoriasSuboficial_model', 'Comandos_model', 'Escenarios_model', 'Procesos_model', 'UnidadAerea_model', 'Canales_model'));
		$data['title'] = '<b>Control</b>Denuncias';
		$data['titlemin'] = '<b>C</b>D';
		$data['subtitle'] = 'Registro caso';
		$data['titleform'] = 'Registro caso';
		$data['catNoUni'] = $this->CategoriasNoUniformado_model->getAll();
		$data['catSubOfi'] = $this->CategoriasSuboficial_model->getAll();
		$data['catOfi'] = $this->CategoriasOficial_model->getAll();
		$data['escenarios'] = $this->Escenarios_model->getAll();
		$data['procesos'] = $this->Procesos_model->getAll();
		$data['comandos'] = $this->Comandos_model->getAll();
		$data['unidades'] = $this->UnidadAerea_model->getAll();
		$data['canales'] = $this->Canales_model->getAll();
		$this->load->view('admin/pages/forms/registro_caso', $data);
	}

	public function table()
	{
		$data['title'] = '<b>Directorio</b>Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Directorio Activo';
		$data['titleform'] = 'ADF';
		$this->load->view('admin/pages/tables/data', $data);
	}
}
