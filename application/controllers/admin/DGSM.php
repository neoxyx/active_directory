<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DGSM extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dgsm_model');
	}
	/*
    function for Administrar DGSM.
    return all DGSMs.
    created by your name
    created at 27-04-21.
	santosh salve
    */
	public function DGSM()
	{
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'DGSM';
		$data['titleform'] = 'DGSM';
		$data['DGSMs'] = $this->Dgsm_model->getAll();
		$this->load->view('admin/DGSM/manage-DGSM', $data);
	}
	/*
    function for  Agregar DGSM get
    created by your name
    created at 27-04-21.
    */
	public function addDGSM()
	{
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'DGSM';
		$data['titleform'] = 'DGSM';
		$this->load->view('admin/DGSM/add-DGSM', $data);
	}

	/*
    function for Agregar DGSM post
    created by your name
    created at 27-04-21.
    */
	public function addDGSMPost()
	{
		$data['IDENTIFICACION'] = $this->input->post('IDENTIFICACION');
		$data['NOMBRES'] = $this->input->post('NOMBRES');
		$data['APELLIDOS'] = $this->input->post('APELLIDOS');
		$data['SEXO'] = $this->input->post('SEXO');
		$data['TITULO'] = $this->input->post('TITULO');
		$data['CARGO'] = $this->input->post('CARGO');
		$data['ESPECIALIDAD'] = $this->input->post('ESPECIALIDAD');
		$data['UNIDAD'] = $this->input->post('UNIDAD');
		$data['DISPENSARIO'] = $this->input->post('DISPENSARIO');
		$data['DEPENDENCIA_LABORAL'] = $this->input->post('DEPENDENCIA_LABORAL');
		$data['TELEFONO_OFICINA'] = $this->input->post('TELEFONO_OFICINA');
		$data['EMAIL_PERSONAL'] = $this->input->post('EMAIL_PERSONAL');
		$data['DIRECCION_PERSONAL'] = $this->input->post('DIRECCION_PERSONAL');
		$data['CIUDAD_RESIDENCIA'] = $this->input->post('CIUDAD_RESIDENCIA');
		$data['CELULAR'] = $this->input->post('CELULAR');
		$data['USUARIO_DE_RED_JEFE_INMEDIATO'] = $this->input->post('USUARIO_DE_RED_JEFE_INMEDIATO');
		$data['FECHA_DE_VIGENCIA'] = $this->input->post('FECHA_DE_VIGENCIA');
		$this->Dgsm_model->insert($data);
		$this->session->set_flashdata('success', 'DGSM added Successfully');
		redirect('DGSM');
	}

	/*
    function for edit DGSM get
    returns  DGSM by id.
    created by your name
    created at 27-04-21.
    */
	public function editDGSM($DGSM_id)
	{
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Editar DGSM';
		$data['titleform'] = 'DGSM';
		$data['DGSM_id'] = $DGSM_id;
		$data['DGSM'] = $this->Dgsm_model->getDataById($DGSM_id);
		$this->load->view('admin/DGSM/edit-DGSM', $data);
	}

	/*
    function for edit DGSM post
    created by your name
    created at 27-04-21.
    */
	public function editDGSMPost()
	{
		$DGSM_id = $this->input->post('DGSM_id');
		$DGSM = $this->DGSM->getDataById($DGSM_id);
		$data['IDENTIFICACION'] = $this->input->post('IDENTIFICACION');
		$data['NOMBRES'] = $this->input->post('NOMBRES');
		$data['APELLIDOS'] = $this->input->post('APELLIDOS');
		$data['SEXO'] = $this->input->post('SEXO');
		$data['TITULO'] = $this->input->post('TITULO');
		$data['CARGO'] = $this->input->post('CARGO');
		$data['ESPECIALIDAD'] = $this->input->post('ESPECIALIDAD');
		$data['UNIDAD'] = $this->input->post('UNIDAD');
		$data['DISPENSARIO'] = $this->input->post('DISPENSARIO');
		$data['DEPENDENCIA_LABORAL'] = $this->input->post('DEPENDENCIA_LABORAL');
		$data['TELEFONO_OFICINA'] = $this->input->post('TELEFONO_OFICINA');
		$data['EMAIL_PERSONAL'] = $this->input->post('EMAIL_PERSONAL');
		$data['DIRECCION_PERSONAL'] = $this->input->post('DIRECCION_PERSONAL');
		$data['CIUDAD_RESIDENCIA'] = $this->input->post('CIUDAD_RESIDENCIA');
		$data['CELULAR'] = $this->input->post('CELULAR');
		$data['USUARIO_DE_RED_JEFE_INMEDIATO'] = $this->input->post('USUARIO_DE_RED_JEFE_INMEDIATO');
		$data['FECHA_DE_VIGENCIA'] = $this->input->post('FECHA_DE_VIGENCIA');
		$edit = $this->Dgsm_model->update($DGSM_id, $data);
		if ($edit) {
			$this->session->set_flashdata('success', 'DGSM Updated');
			redirect('DGSM');
		}
	}

	/*
    function for view DGSM get
    created by your name
    created at 27-04-21.
    */
	public function viewDGSM($DGSM_id)
	{
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Ver DGSM';
		$data['titleform'] = 'DGSM';
		$data['DGSM_id'] = $DGSM_id;
		$data['DGSM'] = $this->Dgsm_model->getDataById($DGSM_id);
		$this->load->view('admin/DGSM/view-DGSM', $data);
	}
	/*
    function for delete DGSM    created by your name
    created at 27-04-21.
    */
	public function deleteDGSM($DGSM_id)
	{
		$delete = $this->Dgsm_model->delete($DGSM_id);
		$this->session->set_flashdata('success', 'DGSM deleted');
		redirect('DGSM');
	}
}
