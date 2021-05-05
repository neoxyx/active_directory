<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$ldaprdn  = 'cn=' . $user . ',ou=DISEI,dc=seguro,dc=fac,dc=mil,dc=co'; //',ou=Service Accounts,dc=fac,dc=co';     //test: ou=DISEI,dc=seguro,dc=fac,dc=mil,dc=co ldap rdn or dn
		$ldappass = $pass;  // associated password
		// Variables del servidor LDAP
		$ldaphost = "172.21.10.62"; //"172.20.101.108"; //test: "172.21.10.62";  // servidor LDAP
		$ldapport = 389;            // puerto del servidor LDAP

		// Conexión al servidor LDAP
		$ldapconn = ldap_connect($ldaphost, $ldapport)
			or die("Could not connect to $ldaphost");
		if ($ldapconn) {

			// realizando la autenticación
			$ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

			// verificación del enlace
			if ($ldapbind) {
				$usuario_data = array(
					'nombre_completo' => $user,
					'user' => $user,
					'pass' => $pass
				);
				$this->session->set_userdata('datos_usuario', $usuario_data);
				$msg = 'ok';
			} else {
				$msg = 'error';
			}
		}
		ldap_close($ldapconn);
		echo $msg;
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
