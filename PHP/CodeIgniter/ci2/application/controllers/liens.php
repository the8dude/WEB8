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
		$this->load->view('liste', $model);

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
		$model["titre"] = "DÃ©tails";
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
        	$str = $this->db->update_string('liens', $data, "id=" . $id);
        	$this->db->query($str);

        	$this->load->helper('url');
        	redirect(site_url("liens/liste"));
    	}

    	public function script_supprimer($id)
	{
	    	$this->load->database();

	    	$this->db->query("delete from liens where id= ?", array($id));
	        
	    	$this->load->helper('url');
        	redirect(site_url("liens/liste"));
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
        	$str = $this->db->insert_string('liens', $data);
        	$this->db->query($str);

        	$this->load->helper('url');
        	redirect(site_url("liens/liste"));
    	}

	public function guillemet()
    	{
    		$data = $this->input->post();
        	$titre = $this->input->post("titre");
        	$description = $this->input->post("description");
        	$url = $this->input->post("url");
        	$webmaster = $this->input->post("webmaster");

        	for ($i=0; $i < input.lenght ; $i++) 
		{ 
        	
        		if ($i == '"')
        		{
        			$i = &quot; ;
        		}
        	}
        
    	}
}
?>