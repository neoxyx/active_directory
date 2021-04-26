<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Management extends CI_Controller
{

	public function adf()
	{
		$this->load->model('Adf_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'ADF';
		$data['titleform'] = 'ADF';
		$data['columns'] = $this->Adf_model->getColumns();
		$data['datos'] = $this->Adf_model->getAll();
		$this->load->view('admin/pages/tables/adf', $data);
	}

	public function dgsm()
	{
		$this->load->model('Dgsm_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'DGSM';
		$data['titleform'] = 'DGSM';
		$data['columns'] = $this->Dgsm_model->getColumns();
		$data['datos'] = $this->Dgsm_model->getAll();
		$this->load->view('admin/pages/tables/dgsm', $data);
	}

	public function externo()
	{
		$this->load->model('Externo_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Externo';
		$data['titleform'] = 'Externo';
		$data['columns'] = $this->Externo_model->getColumns();
		$data['datos'] = $this->Externo_model->getAll();
		$this->load->view('admin/pages/tables/externo', $data);
	}

	public function g_cargos()
	{
		$this->load->model('Grupo_cargos_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Grupo Cargos';
		$data['titleform'] = 'Grupo Cargos';
		$data['columns'] = $this->Grupo_cargos_model->getColumns();
		$data['datos'] = $this->Dgsm_model->getAll();
		$this->load->view('admin/pages/tables/g_cargos', $data);
	}

	public function g_grados()
	{
		$this->load->model('Grupo_grados_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Grupo Grados';
		$data['titleform'] = 'Grupo Grados';
		$data['columns'] = $this->Grupo_grados_model->getColumns();
		$data['datos'] = $this->Grupo_grados_model->getAll();
		$this->load->view('admin/pages/tables/g_grados', $data);
	}

	public function m_cargos()
	{
		$this->load->model('Manejo_cargos_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Manejo Cargos';
		$data['titleform'] = 'Manejo Cargos';
		$data['columns'] = $this->Manejo_cargos_model->getColumns();
		$data['datos'] = $this->Manejo_cargos_model->getAll();
		$this->load->view('admin/pages/tables/m_cargos', $data);
	}

	public function novedades()
	{
		$this->load->model('Novedades_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Novedades';
		$data['titleform'] = 'Novedades';
		$data['columns'] = $this->Novedades_model->getColumns();
		$data['datos'] = $this->Novedades_model->getAll();
		$this->load->view('admin/pages/tables/novedades', $data);
	}

	public function novedades_dom_fac()
	{
		$this->load->model('Novedades_domfac_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Novedades DomFac';
		$data['titleform'] = 'Novedades DomFac';
		$data['columns'] = $this->Novedades_domfac_model->getColumns();
		$data['datos'] = $this->Novedades_domfac_model->getAll();
		$this->load->view('admin/pages/tables/novedades_dom_fac', $data);
	}

	public function rest_contrasenas()
	{
		$this->load->model('Rest_contrasenas_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Restricción Contraseñas';
		$data['titleform'] = 'Restricción Contraseñas';
		$data['columns'] = $this->Rest_contrasenas_model->getColumns();
		$data['datos'] = $this->Rest_contrasenas_model->getAll();
		$this->load->view('admin/pages/tables/rest_contrasenas', $data);
	}

	public function samafull()
	{
		$this->load->model('Samafull_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'SAMAFULL';
		$data['titleform'] = 'SAMAFULL';
		$data['columns'] = $this->Samafull_model->getColumns();
		$data['datos'] = $this->Samafull_model->getAll();
		$this->load->view('admin/pages/tables/samafull', $data);
	}

	public function siath()
	{
		$this->load->model('Siath_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'SIATH';
		$data['titleform'] = 'SIATH';
		$data['columns'] = $this->Siath_model->getColumns();
		$data['datos'] = $this->Siath_model->getAll();
		$this->load->view('admin/pages/tables/siath', $data);
	}

	public function t_maquina()
	{
		$this->load->model('Type_machine_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Tipos de Maquinas';
		$data['titleform'] = 'Tipos de Maquinas';
		$data['columns'] = $this->Type_machine_model->getColumns();
		$data['datos'] = $this->Type_machine_model->getAll();
		$this->load->view('admin/pages/tables/t_maquina', $data);
	}

	public function t_tarjetas()
	{
		$this->load->model('Tab_tarjetas_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Tab Tarjetas';
		$data['titleform'] = 'Tab Tarjetas';
		$data['columns'] = $this->Tab_tarjetas_model->getColumns();
		$data['datos'] = $this->Tab_tarjetas_model->getAll();
		$this->load->view('admin/pages/tables/t_tarjetas', $data);
	}

	public function u_dependencias()
	{
		$this->load->model('Unidades_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Unidades Dependencia';
		$data['titleform'] = 'Unidades Dependencia';
		$data['columns'] = $this->Unidades_model->getColumns();
		$data['datos'] = $this->Unidades_model->getAll();
		$this->load->view('admin/pages/tables/u_dependencias', $data);
	}

	public function dep()
	{
		$this->load->model('Dep_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'DEP';
		$data['titleform'] = 'DEP';
		$data['columns'] = $this->Dep_model->getColumns();
		$data['datos'] = $this->Dep_model->getAll();
		$this->load->view('admin/pages/tables/dep', $data);
	}
}
