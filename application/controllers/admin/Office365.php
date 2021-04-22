<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Office365 extends CI_Controller
{


	public function index()
	{
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

		header('Content-Type: text/html; charset=utf-8');
		$client_id     = "6564c797-25c0-4a2c-b3c3-cb1ff479ff67";
		$client_secret = "M6qtSICt5ricuLyN7_d9.-p~djMdT~xq39";
		$redirect_uri  = "http://localhost/index.php/admin/Management/callApi";

		$response   = "";
		$response   = "https://login.microsoftonline.com/common/oauth2/authorize?client_id=" . $client_id . "&scope=wl.signin%20wl.offline_access%20wl.skydrive_update%20wl.basic&response_type=code&redirect_uri=" . urlencode($redirect_uri) . "&prompt=admin_consent";  //&prompt=consent


		echo "<h2>office 365 using PHP login</h2>";
		echo "<br>";
		if (!isset($_GET['code'])) {
			echo "LOGIN  :: ";
			echo "<span style='vertical-align: middle;'><a href='" . $response . "'>LOGIN</a></span>";
		}



		$arraytoreturn = array();
		$output = "";
		//  Redeem the authorization code for tokens office 365 using PHP
		if (isset($_GET['code'])) {
			$auth = $_GET['code'];
			$resource_id = "https://api.office.com/discovery/";
			$data = "client_id=" . $client_id . "&redirect_uri=" . urlencode($redirect_uri) . "&client_secret=" . urlencode($client_secret) . "&code=" . $auth . "&grant_type=authorization_code&resource=" . $resource_id;
			try {
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, "https://login.microsoftonline.com/common/oauth2/token");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'Content-Type: application/x-www-form-urlencoded',
				));
				curl_setopt($ch, CURLOPT_POST, TRUE);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				$output = curl_exec($ch);
			} catch (Exception $exception) {
				var_dump($exception);
			}

			$out2 = json_decode($output, true);
			$get_access_token = $out2['access_token'];
			$get_refresh_token = $out2['refresh_token'];
			$arraytoreturn = array(
				'access_token' => $out2['access_token'],
				'refresh_token' => $out2['refresh_token'],
				'expires_in' => $out2['expires_in']
			);
			echo "Get access toke and refresh token in office 365 using PHP<br>";
			echo "access token :: " . $get_access_token . "<br>";
			echo "refresh token :: " . $get_refresh_token . "<br>";
		}
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
