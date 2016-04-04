<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class liens extends CI_Controller {

	
	public function liste()
	{
		$this->load->database();

		$model["liste"] = $this->db->query("select * from liens");
		$model["titre"] = "Sommaire";
		$this->load->view('liste', $model);
	}

	public function details($id)
	{
		$this->load->database();
		
		$liste = $this->db->query("select * from liens where id= ?", array($id));
    	$model["ligne"] = $liste->row(); // première ligne du résultat
		$model["titre"] = "Détails";
		$this->load->view('details', $model);
	}

	public function modifier($id)
	{
	    $this->load->database();

	    $liste = $this->db->query("select * from liens where id= ?", array($id));
	    $model["ligne"] = $liste->row(); // première ligne du résultat
	    $model["titre3"] = "Formulaire";
	    $this->load->view('modifier', $model);
	}

	public function script_modif()
    {
        $data = $this->input->post();

        $this->load->database();
        $str = $this->db->update_string('Liens', $data);
        $this->db->query($str);

        $this->load->helper('url');
        redirect('http://localhost/index.php/liens/index', 'location');
    }
}
?>