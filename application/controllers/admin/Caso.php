<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Caso extends CI_Controller
{

	public function create()
	{
		$this->load->model("Casos_model");
		//$session_data = $this->session->userdata('datos_usuario');
		//$idUser = $session_data['idUser'];
		$anonimo = is_null($this->input->post("anonimo")) ? 0 : $this->input->post("anonimo");
		$InspeccionAspectosCriticos = is_null($this->input->post("inspAspCrit")) ? 0 : $this->input->post("inspAspCrit");
		$data = array(
			"IdCategoriaNoUniformado" => $this->input->post("catNoUni"),
			"IdCategoriaSuboficial" => $this->input->post("catSubOficial"),
			"IdCategoriaOficial" => $this->input->post("catOficial"),
			"IdEscenario" => $this->input->post("escenario"),
			"IdProceso" => $this->input->post("proceso"),
			"IdComando" => $this->input->post("comando"),
			"IdUnidadAerea" => $this->input->post("unidad"),
			"NombreCaso" => $this->input->post("nombrecaso"),
			"Radicado" => $this->input->post("numcaso"),
			"FechaDenuncia" => date('Y-m-d'),
			"MesLlegaOFINT" => $this->input->post("mes"),
			"AnioLlegaOFINT" => $this->input->post("anio"),
			"Anonimo" => $anonimo,
			"FechaInicioGestion" => $this->input->post("fechaini"),
			"InspeccionAspectosCriticos" => $InspeccionAspectosCriticos,
			"FechaInicioInspeccionAspectosCriticos" => $this->input->post("fechaInspAspCrit"),
			"DiasDeInspeccionAspectosCriticos" => $this->input->post("diasInspAspCrit"),
			"Estado" => 0
		);
		$res = $this->Casos_model->create($data);
		echo $res;
	}
}
