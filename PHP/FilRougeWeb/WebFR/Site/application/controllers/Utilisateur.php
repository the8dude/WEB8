<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

	
	public function login()
	{
		$this->load->library('session');
		$this->load->helper('url');

		if ($this->input->server('REQUEST_METHOD') == 'POST' && $_POST["login"]=="commercial" && $_POST["password"]=="pass" ) 
		{
			//if ( mot de passe correct )
			$this->session->set_userdata("connexion", "ok");
			redirect (site_url("client/index"));

		}
		else {
			$this->load->view('utilisateur/login');

		}
	}

	public function logout()
	{
		$this->load->library('session');
		$this->load->helper('url');
		$this->session->unset_userdata('connexion');
		redirect (site_url("client/index"));
	}
}
