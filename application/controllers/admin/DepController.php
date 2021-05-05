<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DepController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dep');
	}
	/*
    function for manage Dep.
    return all Deps.
    created by your name
    created at 28-04-21.
	santosh salve
    */
	public function manageDep()
	{
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Ver Dep';
		$data['titleform'] = 'Dep';
		$data['Deps'] = $this->Dep->getAll();
		$this->load->view('admin/Dep/manage-Dep', $data);
	}
	/*
    function for  add Dep get
    created by your name
    created at 28-04-21.
    */
	public function addDep()
	{
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Agregar Dep';
		$data['titleform'] = 'Dep';
		$this->load->view('admin/Dep/add-Dep', $data);
	}
	/*
    function for add Dep post
    created by your name
    created at 28-04-21.
    */
	public function addDepPost()
	{
		$data['CONSECUTIVO'] = $this->input->post('CONSECUTIVO');
		$data['SIGLA'] = $this->input->post('SIGLA');
		$data['DESCRIPCION_DEPENDENCIA'] = $this->input->post('DESCRIPCION_DEPENDENCIA');
		$data['INDICATIVO_MICROONDAS'] = $this->input->post('INDICATIVO_MICROONDAS');
		$data['NIVEL_JERARQUICO'] = $this->input->post('NIVEL_JERARQUICO');
		$data['NIVEL_ORGANIZACIONAL'] = $this->input->post('NIVEL_ORGANIZACIONAL');
		$data['NIVEL_FUNCIONAL'] = $this->input->post('NIVEL_FUNCIONAL');
		$data['SIGLA2'] = $this->input->post('SIGLA2');
		$data['SIGLA3'] = $this->input->post('SIGLA3');
		$data['SIGLA4'] = $this->input->post('SIGLA4');
		$data['SIGLA5'] = $this->input->post('SIGLA5');
		$data['SIGLA6'] = $this->input->post('SIGLA6');
		$data['SIGLA7'] = $this->input->post('SIGLA7');
		$data['SIGLA8'] = $this->input->post('SIGLA8');
		$data['SIGLA9'] = $this->input->post('SIGLA9');
		$data['SIGLA10'] = $this->input->post('SIGLA10');
		$data['SIGLA11'] = $this->input->post('SIGLA11');
		$data['SIGLA12'] = $this->input->post('SIGLA12');
		$data['SIGLA13'] = $this->input->post('SIGLA13');
		$data['OU_dependencia'] = $this->input->post('OU_dependencia');
		$data['Manager'] = $this->input->post('Manager');
		$data['UNDE_CONSECUTIVO'] = $this->input->post('UNDE_CONSECUTIVO');
		$data['LATITUD'] = $this->input->post('LATITUD');
		$data['LONGITUD'] = $this->input->post('LONGITUD');
		$data['CODIGO_TOE'] = $this->input->post('CODIGO_TOE');
		$this->Dep->insert($data);
		$this->session->set_flashdata('success', 'Dep added Successfully');
		redirect('manage-Dep');
	}
	/*
    function for edit Dep get
    returns  Dep by id.
    created by your name
    created at 28-04-21.
    */
	public function editDep($Dep_id)
	{
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Editar Dep';
		$data['titleform'] = 'Dep';
		$data['CONSECUTIVO'] = $Dep_id;
		$data['Dep'] = $this->Dep->getDataById($Dep_id);
		$this->load->view('admin/Dep/edit-Dep', $data);
	}
	/*
    function for edit Dep post
    created by your name
    created at 28-04-21.
    */
	public function editDepPost()
	{
		$Dep_id = $this->input->post('Dep_id');
		$Dep = $this->Dep->getDataById($Dep_id);
		$data['CONSECUTIVO'] = $this->input->post('CONSECUTIVO');
		$data['SIGLA'] = $this->input->post('SIGLA');
		$data['DESCRIPCION_DEPENDENCIA'] = $this->input->post('DESCRIPCION_DEPENDENCIA');
		$data['INDICATIVO_MICROONDAS'] = $this->input->post('INDICATIVO_MICROONDAS');
		$data['NIVEL_JERARQUICO'] = $this->input->post('NIVEL_JERARQUICO');
		$data['NIVEL_ORGANIZACIONAL'] = $this->input->post('NIVEL_ORGANIZACIONAL');
		$data['NIVEL_FUNCIONAL'] = $this->input->post('NIVEL_FUNCIONAL');
		$data['SIGLA2'] = $this->input->post('SIGLA2');
		$data['SIGLA3'] = $this->input->post('SIGLA3');
		$data['SIGLA4'] = $this->input->post('SIGLA4');
		$data['SIGLA5'] = $this->input->post('SIGLA5');
		$data['SIGLA6'] = $this->input->post('SIGLA6');
		$data['SIGLA7'] = $this->input->post('SIGLA7');
		$data['SIGLA8'] = $this->input->post('SIGLA8');
		$data['SIGLA9'] = $this->input->post('SIGLA9');
		$data['SIGLA10'] = $this->input->post('SIGLA10');
		$data['SIGLA11'] = $this->input->post('SIGLA11');
		$data['SIGLA12'] = $this->input->post('SIGLA12');
		$data['SIGLA13'] = $this->input->post('SIGLA13');
		$data['OU_dependencia'] = $this->input->post('OU_dependencia');
		$data['Manager'] = $this->input->post('Manager');
		$data['UNDE_CONSECUTIVO'] = $this->input->post('UNDE_CONSECUTIVO');
		$data['LATITUD'] = $this->input->post('LATITUD');
		$data['LONGITUD'] = $this->input->post('LONGITUD');
		$data['CODIGO_TOE'] = $this->input->post('CODIGO_TOE');
		$edit = $this->Dep->update($Dep_id, $data);
		if ($edit) {
			$this->session->set_flashdata('success', 'Dep Updated');
			redirect('manage-Dep');
		}
	}
	/*
    function for view Dep get
    created by your name
    created at 28-04-21.
    */
	public function viewDep($Dep_id)
	{
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Dep';
		$data['titleform'] = 'Dep';
		$data['Dep_id'] = $Dep_id;
		$data['Dep'] = $this->Dep->getDataById($Dep_id);
		$this->load->view('admin/Dep/view-Dep', $data);
	}
	/*
    function for delete Dep    created by your name
    created at 28-04-21.
    */
	public function deleteDep($Dep_id)
	{
		$delete = $this->Dep->delete($Dep_id);
		$this->session->set_flashdata('success', 'Dep deleted');
		redirect('manage-Dep');
	}
	/*
    function for activation and deactivation of Dep.
    created by your name
    created at 28-04-21.
    */
	public function changeStatusDep($Dep_id)
	{
		$edit = $this->Dep->changeStatus($Dep_id);
		$this->session->set_flashdata('success', 'Dep ' . $edit . ' Successfully');
		redirect('manage-Dep');
	}
}
