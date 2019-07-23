<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Agence extends CI_Controller
{
public function __construct()
{
parent::__construct();
$this->load->model('annonce_model','annonceManager');
$this->load->model('immobilier_model','immobilierManager');
$this->load->model('personne_model','personneManager');
$this->load->library('form_validation');
}

public function index(){
	$this->newannonce();
}


public function liste(){
	$this->load->view('agence/liste');
}


public function newagence(){

	$data['pseudo']=$_SESSION['pseudo'];
	$query=$this->personneManager->selectpers($_SESSION['pseudo']);

	foreach ($query->result() as $row){
  		$data['proprietaire']=$row->pers_nom.' '.$row->pers_prenom;
	}

	$this->load->view('inscription/inscription_agence',$data);
}


}