<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Views extends CI_Controller
{


	public function cargos()
	{
		$this->load->model('Cargos_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Cargos';
		$data['titleform'] = 'Cargos';
		$data['columns'] = $this->Cargos_model->getColumns();
		$data['datos'] = $this->Cargos_model->getAll();
		$this->load->view('admin/pages/views/cargos', $data);
	}

	public function cargos_siath()
	{
		$this->load->model('Cargos_siath_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Cargos SIATH';
		$data['titleform'] = 'Cargos SIATH';
		$data['columns'] = $this->Cargos_siath_model->getColumns();
		$data['datos'] = $this->Cargos_siath_model->getAll();
		$this->load->view('admin/pages/views/cargos_siath', $data);
	}

	public function dgsm()
	{
		$this->load->model('Dgsm_view_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'DGSM';
		$data['titleform'] = 'DGSM';
		$data['columns'] = $this->Dgsm_view_model->getColumns();
		$data['datos'] = $this->Dgsm_view_model->getAll();
		$this->load->view('admin/pages/views/dgsm_view', $data);
	}

	public function empleados()
	{
		$this->load->model('Empleados_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] =  'Empleados';
		$data['titleform'] = 'Empleados';
		$data['columns'] = $this->Empleados_model->getColumns();
		$data['datos'] = $this->Empleados_model->getAll();
		$this->load->view('admin/pages/views/empleados', $data);
	}

	public function external()
	{
		$this->load->model('External_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'External';
		$data['titleform'] = 'External';
		$data['columns'] = $this->External_model->getColumns();
		$data['datos'] = $this->External_model->getAll();
		$this->load->view('admin/pages/views/external', $data);
	}

	public function gen_t_manejo()
	{
		$this->load->model('Gen_t_manejo_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'GenTManejo';
		$data['titleform'] = 'GenTManejo';
		$data['columns'] = $this->Manejo_cargos_model->getColumns();
		$data['datos'] = $this->Manejo_cargos_model->getAll();
		$this->load->view('admin/pages/views/gen_t_manejo', $data);
	}

	public function lst_usr_admin()
	{
		$this->load->model('Lst_usr_admin_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Lista Admin';
		$data['titleform'] = 'Lista Admin';
		$data['columns'] = $this->Lst_usr_admin_model->getColumns();
		$data['datos'] = $this->Lst_usr_admin_model->getAll();
		$this->load->view('admin/pages/views/lst_usr_admin', $data);
	}

	public function m_cargos()
	{
		$this->load->model('Manejo_cargos_view_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Manejo Cargos';
		$data['titleform'] = 'Manejo Cargos';
		$data['columns'] = $this->Manejo_cargos_view_model->getColumns();
		$data['datos'] = $this->Manejo_cargos_view_model->getAll();
		$this->load->view('admin/pages/views/m_cargos', $data);
	}

	public function novedades()
	{
		$this->load->model('Novedades_view_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Novedades';
		$data['titleform'] = 'Novedades';
		$data['columns'] = $this->Novedades_view_model->getColumns();
		$data['datos'] = $this->Novedades_view_model->getAll();
		$this->load->view('admin/pages/views/novedades', $data);
	}

	public function siath()
	{
		$this->load->model('Siath_view_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'SIATH';
		$data['titleform'] = 'SIATH';
		$data['columns'] = $this->Siath_view_model->getColumns();
		$data['datos'] = $this->Siath_view_model->getAll();
		$this->load->view('admin/pages/views/siath', $data);
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
		$this->load->view('admin/pages/views/t_maquina', $data);
	}

	public function t_manejo()
	{
		$this->load->model('T_manejo_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Tarjetas Manejo';
		$data['titleform'] = 'Tarjetas Manejo';
		$data['columns'] = $this->T_manejo_model->getColumns();
		$data['datos'] = $this->T_manejo_model->getAll();
		$this->load->view('admin/pages/views/t_manejo', $data);
	}

	public function t_manejo_vencidas()
	{
		$this->load->model('T_manejo_vencidas_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Tarjetas Manejo Vencidas';
		$data['titleform'] = 'Tarjetas Manejo Vencidas';
		$data['columns'] = $this->T_manejo_vencidas_model->getColumns();
		$data['datos'] = $this->T_manejo_vencidas_model->getAll();
		$this->load->view('admin/pages/views/t_manejo_vencidas', $data);
	}

	public function tab_tarjetas_activas()
	{
		$this->load->model('Tab_tarjetas_activas_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Tab Tarjetas Activas';
		$data['titleform'] = 'Tab Tarjetas Activas';
		$data['columns'] = $this->Tab_tarjetas_activas_model->getColumns();
		$data['datos'] = $this->Tab_tarjetas_activas_model->getAll();
		$this->load->view('admin/pages/views/tab_tarjetas_activas', $data);
	}
}
