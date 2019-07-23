<?php
class Personne extends CI_Controller{
	protected $appel='Personnes';
public function __construct()
{

parent::__construct();
$this->load->model('personne_model','personneManager');
$this->load->library('form_validation');
}







}