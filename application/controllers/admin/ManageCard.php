<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageCard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('ManageLoads', 'ManageCards', 'GroupLoads_model', 'Grupo_grados_model'));
	}

	public function index()
	{
		$session_data = $this->session->userdata('datos_usuario');
		if (!$session_data) {
			redirect(base_url());
		}
		$data['title'] = 'Tarjetas de Manejo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Administración Tarjetas de Manejo';
		$data['Loads'] = $this->ManageLoads->getAll();
		$data['Cards'] = $this->ManageCards->getAll();
		$this->load->view('admin/Card/manage-Card', $data);
	}

	public function manageLoads()
	{
		$session_data = $this->session->userdata('datos_usuario');
		if (!$session_data) {
			redirect(base_url());
		}
		$data['title'] = 'Manejo Cargos';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Administración Manejo Cargos';
		$data['Loads'] = $this->ManageLoads->getAll();
		$this->load->view('admin/Card/view-ManageLoads', $data);
	}

	public function addManageLoads()
	{
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Agregar Manejo Cargo';
		$data['titleform'] = 'Manejo Cargo';
		$data['GroupsLoads'] = $this->GroupLoads_model->getAll();
		$this->load->view('admin/Card/add-ManageLoads', $data);
	}
	/*
    function for add ManageLoads
    created by your name
    created at 28-04-21.
    */
	public function addManageLoadsPost()
	{
		$data['CARGO'] = $this->input->post('COD_CARGO');
		$data['LEY1712'] = $this->input->post('LEY_1712');
		$data['LEY1621'] = $this->input->post('LEY_1621');
		$data['CARGO_AUTORIZA'] = $this->input->post('COD_CARGO_AUTORIZA');
		$this->ManageLoads->insert($data);
		$this->session->set_flashdata('success', 'Cargos added Successfully');
		redirect('manageLoads');
	}

	public function editManageLoads($cod1, $cod2)
	{
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Editar Manejo Cargo';
		$data['titleform'] = 'Manejo Cargo';
		$data['cod1'] = $cod1;
		$data['cod2'] = $cod2;
		$data['GroupsLoads'] = $this->GroupLoads_model->getAll();
		$data['LEYES'] = array('PUBLICO', 'RESTRINGIDO', 'CONFIDENCIAL', 'ULTRASECRETO', 'SECRETO');
		$data['ManageLoad'] = $this->ManageLoads->getDataById($cod1, $cod2);
		$this->load->view('admin/Card/edit-ManageLoads', $data);
	}
	/*
    function for edit Dep post
    created by your name
    created at 28-04-21.
    */
	public function editManageLoadsPost()
	{
		$cod1 = $this->input->post('cod1');
		$cod2 = $this->input->post('cod2');
		$data['CARGO'] = $this->input->post('CARGO');
		$data['LEY1712'] = $this->input->post('LEY1712');
		$data['LEY1621'] = $this->input->post('LEY1621');
		$data['CARGO_AUTORIZA'] = $this->input->post('CARGO_AUTORIZA');
		$edit = $this->ManageLoads->update($cod1, $cod2, $data);
		if ($edit) {
			$this->session->set_flashdata('success', 'Cargo Updated');
			redirect('manageLoads');
		}
	}

	public function manageCards()
	{
		$session_data = $this->session->userdata('datos_usuario');
		if (!$session_data) {
			redirect(base_url());
		}
		$data['title'] = 'Manejo Tarjetas';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Generar Tarjetas de Manejo';
		$data['Cards'] = $this->ManageCards->getAll();
		$this->load->view('admin/Card/view-ManageCards', $data);
	}

	/*
    function for  add TabTarjetas get
    created by your name
    created at 02-05-21.
    */
	public function addCard()
	{
		$data['title'] = 'Manejo Tarjetas';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Agregar Tarjeta de Manejo';
		$data['GroupGrados'] = $this->Grupo_grados_model->getAll();
		$data['GroupsLoads'] = $this->GroupLoads_model->getAll();		
		$this->load->view('admin/Card/add-Card', $data);
	}
	/*
    function for add TabTarjetas post
    created by your name
    created at 02-05-21.
    */
	public function addCardPost()
	{
		$session_data = $this->session->userdata('datos_usuario');
		$nombre = $session_data['nombre_completo'];
		$data['FECHA'] = date('Y-m-d H:i:s');
		$data['GRADO'] = $this->input->post('GRADO');
		$data['NOMBRE'] = $this->input->post('NOMBRE');
		$data['CEDULA'] = $this->input->post('CEDULA');
		$data['ORIGEN'] = $this->input->post('ORIGEN');
		$data['CODIGO_MILITAR'] = $this->input->post('CODIGO_MILITAR');
		$data['NIVEL_DE_CLASIFICACION'] = $this->input->post('NIVEL_DE_CLASIFICACION');
		$data['CARGO'] = $this->input->post('CARGO');
		$data['JEFATURA_O_GRUPO'] = $this->input->post('JEFATURA_O_GRUPO');
		$data['JEFATURA_O_GRUPO_SIGLA'] = $this->input->post('JEFATURA_O_GRUPO_SIGLA');
		$data['COMANDANTE_QUE_AUTORIZA'] = $this->input->post('COMANDANTE_QUE_AUTORIZA');
		$data['CARGO_DE_COMANDANTE'] = $this->input->post('CARGO_DE_COMANDANTE');
		$data['PROMESA_DE_RESERVA'] = $this->input->post('PROMESA_DE_RESERVA');
		$data['CREA'] = $this->input->post('CREA');
		$data['FECHAEDITA'] = date('Y-m-d H:i:s');
		$data['DESCEDITA'] = $nombre;
		$data['Estado'] = $this->input->post('Estado');
		$this->ManageCards->insert($data);
		$this->session->set_flashdata('success', 'Tarjeta agregada satisfactoriamente!');
		redirect('index.php/admin/ManageCard/manageCards');
	}

	/*
    function for view TabTarjetas get
    created by your name
    created at 02-05-21.
    */
	public function viewTabTarjetas($TabTarjetas_id)
	{
		$data['TabTarjetas_id'] = $TabTarjetas_id;
		$data['TabTarjetas'] = $this->ManageCards->getDataById($TabTarjetas_id);
		$this->load->view('Cards/view-Card', $data);
	}
	/*
    function for delete TabTarjetas    created by your name
    created at 02-05-21.
    */
	public function deactivatedCard($TabTarjetas_id)
	{
		$session_data = $this->session->userdata('datos_usuario');
		$nombre = $session_data['nombre_completo'];
		$data['FECHAEDITA'] = date('Y-m-d H:i:s');
		$data['DESCEDITA'] = $nombre;
		$data['Estado'] = 0;
		$edit = $this->ManageCards->update($TabTarjetas_id, $data);
		if ($edit) {
			$this->session->set_flashdata('success', 'Tarjeta No: ' . $TabTarjetas_id . ' desactivada satisfactoriamente');
			redirect('index.php/admin/ManageCard/manageCards');
		}
	}
}
