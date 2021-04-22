<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Management extends CI_Controller
{


	public function index()
	{
		$session_data = $this->session->userdata('datos_usuario');
		if ($session_data) {
			$config['columnaLdap'] = 'mail';
			$ldaprdn  = 'cn=' . $session_data['user'] . ',ou=DISEI,dc=seguro,dc=fac,dc=mil,dc=co';     // ldap rdn or dn
			$ldappass = $session_data['pass'];  // associated password
			// Variables del servidor LDAP
			$ldaphost = "172.21.10.62";  // servidor LDAP
			$ldapport = 389;            // puerto del servidor LDAP

			// Conexión al servidor LDAP
			$ldapconn = ldap_connect($ldaphost, $ldapport);
			$ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

			$dn        = 'ou=DISEI,dc=seguro,dc=fac,dc=mil,dc=co';
			$filter    = 'uid=*';
			//$justthese = array('ou', 'sn', 'givenname', 'mail');

			$sr = ldap_search($ldapconn, $dn, $filter);
			print_r([$ldapconn, $dn, $filter]);
			var_dump($sr);
			//validamos busqueda
			if ($sr) {
				$data = ldap_get_entries($ldapconn, $sr);
				var_dump($data);
				echo '<h1>Listado de emails</h1>';
				echo '<br>';

				//recorremos busqueda
				for ($i = 0; $i < count($data); $i++) {
					if (isset($data[$i][$config['columnaLdap']][0])) {
						echo $data[$i][$config['columnaLdap']][0];
						echo '<br>';
					}
				}
			}
			ldap_close($ldapconn);
		}
		//echo "Usuarios: " . ldap_count_entries($ldapconn, $sr);
		//}
		/*$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>D</b>A';
		$data['subtitle'] = 'Usuarios';
		$data['titleform'] = 'Usuarios';
		$this->load->view('admin/pages/tables/users', $data);*/
	}

	public function table()
	{
		$this->load->model('Denuncias_model');
		$data['title'] = 'Directorio Activo';
		$data['titlemin'] = '<b>C</b>D';
		$data['subtitle'] = 'Control Denuncias';
		$data['titleform'] = 'Seguimiento';
		$data['denuncias'] = $this->Denuncias_model->get_denuncias();
		$this->load->view('admin/pages/tables/control_denuncias', $data);
	}
}
