<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SAMAFULLController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SAMAFULL');
        $this->load->library('session');
    }
    /*
function for manage SAMAFULL.
return all SAMAFULLs.
created by your name
created at 29-04-21.
santosh salve
*/
    public function manageSAMAFULL()
    {
        $data['title'] = 'Directorio Activo';
        $data['titlemin'] = '<b>D</b>A';
        $data['subtitle'] = 'Ver SAMAFULL';
        $data['titleform'] = 'SAMAFULL';
        $data['SAMAFULLs'] = $this->SAMAFULL->getAll();
        $this->load->view('admin/SAMAFULL/manage-SAMAFULL', $data);
    }
    /*
function for add SAMAFULL get
created by your name
created at 29-04-21.
*/
    public function addSAMAFULL()
    {
        $data['title'] = 'Directorio Activo';
        $data['titlemin'] = '<b>D</b>A';
        $data['subtitle'] = 'Agregar SAMAFULL';
        $data['titleform'] = 'SAMAFULL';
        $this->load->view('admin/SAMAFULL/add-SAMAFULL', $data);
    }
    /*
function for add SAMAFULL post
created by your name
created at 29-04-21.
*/
    public function addSAMAFULLPost()
    {
        $data['UsrGuid'] = $this->input->post('UsrGuid');
        $data['DIRECTORIO'] = $this->input->post('DIRECTORIO');
        $data['CONSECUTIVO'] = $this->input->post('CONSECUTIVO');
        $data['UNDE_CONSECUTIVO_LABORANDO'] = $this->input->post('UNDE_CONSECUTIVO_LABORANDO');
        $data['TIPO_IDENTIFICACION'] = $this->input->post('TIPO_IDENTIFICACION');
        $data['IDENTIFICACION'] = $this->input->post('IDENTIFICACION');
        $data['LUGAR_EXPEDICION'] = $this->input->post('LUGAR_EXPEDICION');
        $data['CODIGO_MILITAR'] = $this->input->post('CODIGO_MILITAR');
        $data['NOMBRES'] = $this->input->post('NOMBRES');
        $data['APELLIDOS'] = $this->input->post('APELLIDOS');
        $data['sAMAccountname'] = $this->input->post('sAMAccountname');
        $data['sAMAccountname1'] = $this->input->post('sAMAccountname1');
        $data['sAMAccountname2'] = $this->input->post('sAMAccountname2');
        $data['userPrincipalName'] = $this->input->post('userPrincipalName');
        $data['userPrincipalName1'] = $this->input->post('userPrincipalName1');
        $data['userPrincipalName2'] = $this->input->post('userPrincipalName2');
        $data['NAME'] = $this->input->post('NAME');
        $data['N'] = $this->input->post('N');
        $data['displayName'] = $this->input->post('displayName');
        $data['SEXO'] = $this->input->post('SEXO');
        $data['GRAD_ALFABETICO'] = $this->input->post('GRAD_ALFABETICO');
        $data['DESCGRADO'] = $this->input->post('DESCGRADO');
        $data['title'] = $this->input->post('title');
        $data['ESPECIALIDAD'] = $this->input->post('ESPECIALIDAD');
        $data['company'] = $this->input->post('company');
        $data['DESCDEPENDE'] = $this->input->post('DESCDEPENDE');
        $data['department'] = $this->input->post('department');
        $data['extensionAttribute2'] = $this->input->post('extensionAttribute2');
        $data['extensionAttribute3'] = $this->input->post('extensionAttribute3');
        $data['EMAIL'] = $this->input->post('EMAIL');
        $data['DIRECCION'] = $this->input->post('DIRECCION');
        $data['CIUDAD'] = $this->input->post('CIUDAD');
        $data['PAIS'] = $this->input->post('PAIS');
        $data['CELULAR'] = $this->input->post('CELULAR');
        $data['UNIDAD_ACTUAL'] = $this->input->post('UNIDAD_ACTUAL');
        $data['FECHA_NACIMIENTO'] = $this->input->post('FECHA_NACIMIENTO');
        $data['GRUPO_SANGUINEO'] = $this->input->post('GRUPO_SANGUINEO');
        $data['FACTOR_RH'] = $this->input->post('FACTOR_RH');
        $data['TIPO_EMPLEADO'] = $this->input->post('TIPO_EMPLEADO');
        $data['HOJA_VIDA'] = $this->input->post('HOJA_VIDA');
        $data['NUMERO_CURSO'] = $this->input->post('NUMERO_CURSO');
        $data['UBICACION_ESCALAFON'] = $this->input->post('UBICACION_ESCALAFON');
        $data['FECHA_ULT_TRASL'] = $this->input->post('FECHA_ULT_TRASL');
        $data['FECHA_ULT_ASCENSO'] = $this->input->post('FECHA_ULT_ASCENSO');
        $data['EMAIL_INSTITUCIONAL'] = $this->input->post('EMAIL_INSTITUCIONAL');
        $data['Duration'] = $this->input->post('Duration');
        $data['Estado'] = $this->input->post('Estado');
        $data['GRNumerico'] = $this->input->post('GRNumerico');
        $data['Antiguedad'] = $this->input->post('Antiguedad');
        $data['GRUPO_GRADO'] = $this->input->post('GRUPO_GRADO');
        $data['GRUPO_CARGO'] = $this->input->post('GRUPO_CARGO');
        $data['GRUPO_FUNCIONAL'] = $this->input->post('GRUPO_FUNCIONAL');
        $data['no'] = $this->input->post('no');
        $this->SAMAFULL->insert($data);
        $this->session->set_flashdata('success', 'SAMAFULL added Successfully');
        redirect('manage-SAMAFULL');
    }
    /*
function for edit SAMAFULL get
returns SAMAFULL by id.
created by your name
created at 29-04-21.
*/
    public function editSAMAFULL($SAMAFULL_id)
    {
        $data['title'] = 'Directorio Activo';
        $data['titlemin'] = '<b>D</b>A';
        $data['subtitle'] = 'Editar SAMAFULL';
        $data['titleform'] = 'SAMAFULL';
        $data['SAMAFULL_id'] = $SAMAFULL_id;
        $data['SAMAFULL'] = $this->SAMAFULL->getDataById($SAMAFULL_id);
        $this->load->view('admin/SAMAFULL/edit-SAMAFULL', $data);
    }
    /*
function for edit SAMAFULL post
created by your name
created at 29-04-21.
*/
    public function editSAMAFULLPost()
    {
        $SAMAFULL_id = $this->input->post('SAMAFULL_id');
        $SAMAFULL = $this->SAMAFULL->getDataById($SAMAFULL_id);
        $data['UsrGuid'] = $this->input->post('UsrGuid');
        $data['DIRECTORIO'] = $this->input->post('DIRECTORIO');
        $data['CONSECUTIVO'] = $this->input->post('CONSECUTIVO');
        $data['UNDE_CONSECUTIVO_LABORANDO'] = $this->input->post('UNDE_CONSECUTIVO_LABORANDO');
        $data['TIPO_IDENTIFICACION'] = $this->input->post('TIPO_IDENTIFICACION');
        $data['IDENTIFICACION'] = $this->input->post('IDENTIFICACION');
        $data['LUGAR_EXPEDICION'] = $this->input->post('LUGAR_EXPEDICION');
        $data['CODIGO_MILITAR'] = $this->input->post('CODIGO_MILITAR');
        $data['NOMBRES'] = $this->input->post('NOMBRES');
        $data['APELLIDOS'] = $this->input->post('APELLIDOS');
        $data['sAMAccountname'] = $this->input->post('sAMAccountname');
        $data['sAMAccountname1'] = $this->input->post('sAMAccountname1');
        $data['sAMAccountname2'] = $this->input->post('sAMAccountname2');
        $data['userPrincipalName'] = $this->input->post('userPrincipalName');
        $data['userPrincipalName1'] = $this->input->post('userPrincipalName1');
        $data['userPrincipalName2'] = $this->input->post('userPrincipalName2');
        $data['NAME'] = $this->input->post('NAME');
        $data['N'] = $this->input->post('N');
        $data['displayName'] = $this->input->post('displayName');
        $data['SEXO'] = $this->input->post('SEXO');
        $data['GRAD_ALFABETICO'] = $this->input->post('GRAD_ALFABETICO');
        $data['DESCGRADO'] = $this->input->post('DESCGRADO');
        $data['title'] = $this->input->post('title');
        $data['ESPECIALIDAD'] = $this->input->post('ESPECIALIDAD');
        $data['company'] = $this->input->post('company');
        $data['DESCDEPENDE'] = $this->input->post('DESCDEPENDE');
        $data['department'] = $this->input->post('department');
        $data['extensionAttribute2'] = $this->input->post('extensionAttribute2');
        $data['extensionAttribute3'] = $this->input->post('extensionAttribute3');
        $data['EMAIL'] = $this->input->post('EMAIL');
        $data['DIRECCION'] = $this->input->post('DIRECCION');
        $data['CIUDAD'] = $this->input->post('CIUDAD');
        $data['PAIS'] = $this->input->post('PAIS');
        $data['CELULAR'] = $this->input->post('CELULAR');
        $data['UNIDAD_ACTUAL'] = $this->input->post('UNIDAD_ACTUAL');
        $data['FECHA_NACIMIENTO'] = $this->input->post('FECHA_NACIMIENTO');
        $data['GRUPO_SANGUINEO'] = $this->input->post('GRUPO_SANGUINEO');
        $data['FACTOR_RH'] = $this->input->post('FACTOR_RH');
        $data['TIPO_EMPLEADO'] = $this->input->post('TIPO_EMPLEADO');
        $data['HOJA_VIDA'] = $this->input->post('HOJA_VIDA');
        $data['NUMERO_CURSO'] = $this->input->post('NUMERO_CURSO');
        $data['UBICACION_ESCALAFON'] = $this->input->post('UBICACION_ESCALAFON');
        $data['FECHA_ULT_TRASL'] = $this->input->post('FECHA_ULT_TRASL');
        $data['FECHA_ULT_ASCENSO'] = $this->input->post('FECHA_ULT_ASCENSO');
        $data['EMAIL_INSTITUCIONAL'] = $this->input->post('EMAIL_INSTITUCIONAL');
        $data['Duration'] = $this->input->post('Duration');
        $data['Estado'] = $this->input->post('Estado');
        $data['GRNumerico'] = $this->input->post('GRNumerico');
        $data['Antiguedad'] = $this->input->post('Antiguedad');
        $data['GRUPO_GRADO'] = $this->input->post('GRUPO_GRADO');
        $data['GRUPO_CARGO'] = $this->input->post('GRUPO_CARGO');
        $data['GRUPO_FUNCIONAL'] = $this->input->post('GRUPO_FUNCIONAL');
        $data['no'] = $this->input->post('no');
        $edit = $this->SAMAFULL->update($SAMAFULL_id, $data);
        if ($edit) {
            $this->session->set_flashdata('success', 'SAMAFULL Updated');
            redirect('manage-SAMAFULL');
        }
    }
    /*
function for view SAMAFULL get
created by your name
created at 29-04-21.
*/
    public function viewSAMAFULL($SAMAFULL_id)
    {
        $data['title'] = 'Directorio Activo';
        $data['titlemin'] = '<b>D</b>A';
        $data['subtitle'] = 'SAMAFULL';
        $data['titleform'] = 'SAMAFULL';
        $data['SAMAFULL_id'] = $SAMAFULL_id;
        $data['SAMAFULL'] = $this->SAMAFULL->getDataById($SAMAFULL_id);
        $this->load->view('admin/SAMAFULL/view-SAMAFULL', $data);
    }
    /*
     /*
function for json SAMAFULL get
created by your name
created at 29-04-21.
*/
    public function getSAMAFULLbyIdent()
    {
        $arr = $this->SAMAFULL->getDataByIdentification($this->input->post('ident'));
        echo json_encode($arr);
    }
    /*
function for delete SAMAFULL created by your name
created at 29-04-21.
*/
    public function deleteSAMAFULL($SAMAFULL_id)
    {
        $delete = $this->SAMAFULL->delete($SAMAFULL_id);
        $this->session->set_flashdata('success', 'SAMAFULL deleted');
        redirect('manage-SAMAFULL');
    }
    /*
function for activation and deactivation of SAMAFULL.
created by your name
created at 29-04-21.
*/
    public function changeStatusSAMAFULL($SAMAFULL_id)
    {
        $edit = $this->SAMAFULL->changeStatus($SAMAFULL_id);
        $this->session->set_flashdata('success', 'SAMAFULL ' . $edit . ' Successfully');
        redirect('manage-SAMAFULL');
    }
}
