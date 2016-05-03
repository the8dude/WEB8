<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System extends CI_Controller 
{
	public function index()
    {
        $this->load->helper('url');
        $this->load->view('index');
    }

    public function confirm()
    {
        $this->load->helper('url');
        $this->load->view('confirm');
    }

    public function contact()
    {
        $this->load->helper('url');
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            $this->load->view('contact');
        }
        else if ($this->input->server('REQUEST_METHOD') == 'POST') {
            // $this->load->library('email');
             
            // //$this->email->Nom($this->input->post("nom")); 
            // //$this->email->Prenom($this->input->post("prenom")); 
            // $this->email->from($this->input->post("email"));
            // $this->email->to('dumontderek@gmail.com');
            // $this->email->subject('Email Test');
            // $this->email->message($this->input->post('Vous avez reçu un message de "message"'));
            // $this->email->->set_mailtype('html');

            // $this->email->send();

            $this->load->view('confirm');
        }
    }

    public function comliste()
    {
        $this->load->database();
        $this->load->helper('url');

        $choix = $this->input->get("choix");

        if ($choix) {
            if ($choix!="all") 
            {
                $model["liste"] = $this->db->query("select * from article where IdSousRubrique='$choix'")->result();
            }
            else
            {
                $model["liste"] = $this->db->query("select * from article")->result();    
            }
        }
        else {
            $model["liste"] = array();
        }
        
        $this->load->view('comliste', $model);
    }

    public function comdetails($id)
    {
        $this->load->database();
        $this->load->helper('url');
        
        $liste = $this->db->query("select * from article where RefArticle= ?", array($id));
        $model["ligne"] = $liste->row(); // premiÃ¨re ligne du rÃ©sultat
        $this->load->view('comdetails', $model);
    }

    public function modifier($id)
    {
            $this->load->database();
            $this->load->helper('url');

            $liste = $this->db->query("select * from article where RefArticle= ?", array($id));
            $model["ligne"] = $liste->row(); // premiÃ¨re ligne du rÃ©sultat
            $this->load->view('modifier', $model);
    }

    public function script_modifier()
        {
            $data = $this->input->post();
            $id = $this->input->post("RefArticle");

            $this->load->database();
            $str = $this->db->update_string('article', $data, "RefArticle=" . $id);
            $this->db->query($str);

            $this->load->helper('url');
            redirect(site_url("system/comliste"));
        }


    public function script_supprimer($id)
    {
            $this->load->database();

            $this->db->query("delete from article where RefArticle= ?", array($id));
            
            $this->load->helper('url');
            redirect(site_url("system/comliste"));
    }

    public function ajout()
    {
        $this->load->helper('url');
        $this->load->view('ajout');     
    }

    public function script_ajout()
        {
            $data = $this->input->post();

            $this->load->helper('url');

            $config['upload_path'] = './image/produits/';
            $config['allowed_types'] = 'gif|jpg|png';
            // $config['max_size'] = '100';
            // $config['max_width']  = '1024';
            // $config['max_height']  = '768';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload("test")) {
                $data["PhotoArticle"] =  "image/produits/" . $this->upload->data()["file_name"];
            }
            // $this->load->view('ajout');

            $this->load->database();
            //var_dump ($this->upload->data());
            $str = $this->db->insert_string('article', $data);
            $this->db->query($str);

            redirect(site_url("system/comliste"));

        }

}
?>