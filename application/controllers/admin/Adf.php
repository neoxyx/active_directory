<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dep extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Adf_model');
	}
	/*
    function for Administrar ADF.
    return all ADFs.
    created by your name
    created at 27-04-21.
	santosh salve
    */
	public function adf()
	{
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'ADF';
		$data['titleform'] = 'ADF';
		$data['ADFs'] = $this->Adf_model->getAll();
		$this->load->view('admin/ADF/manage-ADF', $data);
	}
	/*
    function for  Agregar ADF get
    created by your name
    created at 27-04-21.
    */
	public function addADF()
	{
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'ADF';
		$data['titleform'] = 'ADF';
		$this->load->view('admin/ADF/add-ADF', $data);
	}

	/*
    function for Agregar ADF post
    created by your name
    created at 27-04-21.
    */
	public function addADFPost()
	{
		$data['usrGuid'] = $this->input->post('usrGuid');
		$data['sAMAccountName'] = $this->input->post('sAMAccountName');
		$data['employeeID'] = $this->input->post('employeeID');
		$data['givenName'] = $this->input->post('givenName');
		$data['sn'] = $this->input->post('sn');
		$data['name'] = $this->input->post('name');
		$data['displayName'] = $this->input->post('displayName');
		$data['extensionAttribute1'] = $this->input->post('extensionAttribute1');
		$data['PersonalTitle'] = $this->input->post('PersonalTitle');
		$data['title'] = $this->input->post('title');
		$data['userAccountControl'] = $this->input->post('userAccountControl');
		$data['company'] = $this->input->post('company');
		$data['department'] = $this->input->post('department');
		$data['physicalDeliveryOfficeName'] = $this->input->post('physicalDeliveryOfficeName');
		$data['facsimileTelephoneNumber'] = $this->input->post('facsimileTelephoneNumber');
		$data['extensionAttribute2'] = $this->input->post('extensionAttribute2');
		$data['extensionAttribute3'] = $this->input->post('extensionAttribute3');
		$data['extensionAttribute4'] = $this->input->post('extensionAttribute4');
		$data['extensionAttribute6'] = $this->input->post('extensionAttribute6');
		$data['extensionAttribute8'] = $this->input->post('extensionAttribute8');
		$data['extensionAttribute9'] = $this->input->post('extensionAttribute9');
		$data['extensionAttribute10'] = $this->input->post('extensionAttribute10');
		$data['mobile'] = $this->input->post('mobile');
		$data['CV'] = $this->input->post('CV');
		$data['email'] = $this->input->post('email');
		$data['extensionAttribute7'] = $this->input->post('extensionAttribute7');
		$data['distinguishedName'] = $this->input->post('distinguishedName');
		$this->Adf_model->insert($data);
		$this->session->set_flashdata('success', 'ADF added Successfully');
		redirect('Adf');
	}

	/*
    function for edit ADF get
    returns  ADF by id.
    created by your name
    created at 27-04-21.
    */
	public function editADF($ADF_id)
	{
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Editar ADF';
		$data['titleform'] = 'ADF';
		$data['ADF_id'] = $ADF_id;
		$data['ADF'] = $this->Adf_model->getDataById($ADF_id);
		$this->load->view('admin/ADF/edit-ADF', $data);
	}

	/*
    function for edit ADF post
    created by your name
    created at 27-04-21.
    */
	public function editADFPost()
	{
		$ADF_id = $this->input->post('ADF_id');
		$ADF = $this->Adf_model->getDataById($ADF_id);
		$data['usrGuid'] = $this->input->post('usrGuid');
		$data['sAMAccountName'] = $this->input->post('sAMAccountName');
		$data['employeeID'] = $this->input->post('employeeID');
		$data['givenName'] = $this->input->post('givenName');
		$data['sn'] = $this->input->post('sn');
		$data['name'] = $this->input->post('name');
		$data['displayName'] = $this->input->post('displayName');
		$data['extensionAttribute1'] = $this->input->post('extensionAttribute1');
		$data['PersonalTitle'] = $this->input->post('PersonalTitle');
		$data['title'] = $this->input->post('title');
		$data['userAccountControl'] = $this->input->post('userAccountControl');
		$data['company'] = $this->input->post('company');
		$data['department'] = $this->input->post('department');
		$data['physicalDeliveryOfficeName'] = $this->input->post('physicalDeliveryOfficeName');
		$data['facsimileTelephoneNumber'] = $this->input->post('facsimileTelephoneNumber');
		$data['extensionAttribute2'] = $this->input->post('extensionAttribute2');
		$data['extensionAttribute3'] = $this->input->post('extensionAttribute3');
		$data['extensionAttribute4'] = $this->input->post('extensionAttribute4');
		$data['extensionAttribute6'] = $this->input->post('extensionAttribute6');
		$data['extensionAttribute8'] = $this->input->post('extensionAttribute8');
		$data['extensionAttribute9'] = $this->input->post('extensionAttribute9');
		$data['extensionAttribute10'] = $this->input->post('extensionAttribute10');
		$data['mobile'] = $this->input->post('mobile');
		$data['CV'] = $this->input->post('CV');
		$data['email'] = $this->input->post('email');
		$data['extensionAttribute7'] = $this->input->post('extensionAttribute7');
		$data['distinguishedName'] = $this->input->post('distinguishedName');
		$edit = $this->Adf_model->update($ADF_id, $data);
		if ($edit) {
			$this->session->set_flashdata('success', 'ADF Updated');
			redirect('Adf');
		}
	}

	/*
    function for view ADF get
    created by your name
    created at 27-04-21.
    */
	public function viewADF($ADF_id)
	{
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Ver ADF';
		$data['titleform'] = 'ADF';
		$data['ADF_id'] = $ADF_id;
		$data['ADF'] = $this->Adf_model->getDataById($ADF_id);
		$this->load->view('admin/ADF/view-ADF', $data);
	}
	/*
    function for delete ADF    created by your name
    created at 27-04-21.
    */
	public function deleteADF($ADF_id)
	{
		$delete = $this->Adf_model->delete($ADF_id);
		$this->session->set_flashdata('success', 'ADF deleted');
		redirect('Adf');
	}
}
