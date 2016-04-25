<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	
	public function index()
	{
		$this->load->library('session');
		$this->load->helper('url');
		
		if ($this->session->userdata("connexion")=="ok")
			$this->load->view('client/index');
		else 
			redirect ("utilisateur/login");
	}

	public function test()
	{
		$this->load->library('session');
		$this->load->helper('url');
		//$this->session->set_userdata("connexion", "ok");
		var_dump($this->session->userdata("connexion"));
		if ($this->session->userdata("connexion")=="ok")
			$this->load->view('client/test');
		//else 
			//redirect ("utilisateur/login");
	}
}
