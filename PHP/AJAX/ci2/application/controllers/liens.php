<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liens extends CI_Controller 
{

	
	public function index()
	{
		$this->load->database();
		$this->load->helper('url');

		$model["liste"] = $this->db->query("select * from liens"); // where affichage='oui'");
		$model["titre"] = "Sommaire";
		$this->load->view('index', $model);

	}

	public function liste()
	{
		$this->load->database();
		$this->load->helper('url');

		$model["liste"] = $this->db->query("select * from liens"); // where affichage='oui'");
		$model["titre"] = "Sommaire";
		$this->load->view('liste', $model);

	}

	public function details($id)
	{
		$this->load->database();
		$this->load->helper('url');
		
		$liste = $this->db->query("select * from liens where id= ?", array($id));
    		$model["ligne"] = $liste->row(); // premiÃ¨re ligne du rÃ©sultat
		$model["titre"] = "Détails";
		$this->load->view('details', $model);
	}

	public function modifier($id)
	{
	    	$this->load->database();
	    	$this->load->helper('url');

	    	$liste = $this->db->query("select * from liens where id= ?", array($id));
	    	$model["ligne"] = $liste->row(); // premiÃ¨re ligne du rÃ©sultat
	    	$model["titre"] = "Formulaire";
	    	$this->load->view('modifier', $model);
	}

	public function script_modifier()
    	{
        	$data = $this->input->post();
        	$id = $this->input->post("id");

        	$this->load->database();
        	$this->load->helper('url');

        	$str = $this->db->update_string('liens', $data, "id=" . $id);
        	$this->db->query($str);

    	}

    public function script_supprimer($id)
	{
	    	$this->load->database();
	    	$this->load->helper('url');

	    	$this->db->query("delete from liens where id= ?", array($id));
	        
	}

	public function ajout()
	{
	   	$this->load->helper('url');

	   	$model["titre"] = "Formulaire";
	    $this->load->view('ajout', $model);	    
	}

	public function script_ajout()
	{
    	$data = $this->input->post();

    	$this->load->database();
    	$this->load->helper('url');
    	
    	$str = $this->db->insert_string('liens', $data);
    	$this->db->query($str);

    	
	}

	
}

?>