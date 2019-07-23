<?php
class Valideuser extends CI_Controller
{
	public function __construct()
	{
	
	parent::__construct();
	
	$this->load->library('encrypt');
	$this->load->library('form_validation');
	$this->load->model('utilisateur_model', 'userManager');
	}

	public function index(){
		$this->form_validation->set_rules('nom', 'nom', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prenoms', 'prénom', 'trim|required|xss_clean');
        $this->form_validation->set_rules('dateNais', 'naissance', 'trim|required|xss_clean');
        $this->form_validation->set_rules('sexe', 'sexe', 'trim|required|xss_clean');
        $this->form_validation->set_rules('titre', 'titre', 'trim|required|xss_clean');
		$this->form_validation->set_rules('profil', 'profil', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
		$this->load->view('utilisateur/adduser');
		}else{
		$options_non_echappees = array();
		$options_echappees['nom'] = $this->input->post('nom');	
		$options_echappees['prenoms'] = $this->input->post('prenoms');
		$options_echappees['login'] = substr($this->input->post('prenoms'),0,1) . $this->input->post('nom');
		$options_echappees['password'] =$this->encrypt->encode( substr($this->input->post('prenoms'),0,1) . $this->input->post('nom') );
		$options_echappees['sexe'] =$this->input->post('sexe');
		$options_echappees['dateDeNaissance'] =$this->input->post('dateNais');
		$options_echappees['titre'] =$this->input->post('titre');
		$options_echappees['profil'] =$this->input->post('profil');
		$resultat = $this->userManager->create($options_echappees,$options_non_echappees);
		$this->load->view('utilisateur/adduser');
		}
	}
}
?>