<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Inscription extends CI_Controller{
	
protected $appel='agence';

public function __construct()
{
parent::__construct();
$this->load->model('agence_model','agenceManager');
$this->load->model('personne_model','personneManager');
$this->load->model('utilisateur_model','utilisateurManager');
$this->load->library('form_validation');

}

public function index(){
	$opt=$this->input->get('option');
	if ($opt=='agence') {

		$this->load->view('inscription/inscription_agence');
	}

	if ($opt=='particulier') {
		$this->load->view('inscription/inscription_particulier');
	}

}

public function add(){

	$opt=$this->input->post('op');

	if ($opt=='agence') {
		$this->form_validation->set_rules('numident', '"Numéro Identification"','trim|required');
		$this->form_validation->set_rules('raisonsoc', '"Raison Sociale"','trim|required');
		$this->form_validation->set_rules('adr', '"Adresse de Localisation"','trim|required');

		if ($this->form_validation->run()) {
		$options_echappees1 = array();
		$options_echappees2 = array();
		$options_echappees3 = array();
		$options_echappees1['numident'] =$this->input->post('numident');
		$options_echappees1['agence_nom'] =$this->input->post('raisonsoc');
		$options_echappees1['agence_localisation'] =$this->input->post('adr');

		$options_echappees2['pers_nom'] =$this->input->post('raisonsoc');
		$options_echappees2['pers_email'] =$this->input->post('email');
		$options_echappees2['pers_adress'] =$this->input->post('adr');
		$options_echappees2['pers_type'] ='MORALE';
		$options_echappees2['pers_pseudo'] =$this->input->post('pseudo');

		$options_echappees3['utilisateur_profil'] ='agence';
		$options_echappees3['utilisateur_pseudo'] =$this->input->post('pseudo');
		$options_echappees3['utilisateur_password'] =$this->input->post('password');
		$options_echappees3['utilisateur_statut'] ='actif';

		$resultat = $this->agenceManager->create($options_echappees1);
		$resultat = $this->personneManager->create($options_echappees2);
		$resultat = $this->utilisateurManager->create($options_echappees3);

		?>
		<script type="text/javascript">alert('Compte Créé');</script>

		<?php echo '<meta http-equiv="refresh" content="2;URL='.site_url('inscription/inscription').'?option=agence">';
			/*redirect('inscription/inscription?option=agence');*/	
		}
	}

		if ($opt=='particulier') {
		
		$this->form_validation->set_rules('nom', '"Nom"','trim|required|alpha_dash');
		$this->form_validation->set_rules('prenom', '"Prénom"','trim|required');
		$this->form_validation->set_rules('adr', '"Adresse"','trim|required');
		$this->form_validation->set_rules('datnais', '"Date de naissance"','trim|required');
		$this->form_validation->set_rules('email', '"Email"','trim|required');
		$this->form_validation->set_rules('pseudo', '"Nom d\'utilisateur"','trim|required');
		$this->form_validation->set_rules('pass', '"Mot de passe"','trim|required');

		if ($this->form_validation->run()) {
		/*echo 'OK';*/
				    
		$options_echappees1 = array();
		$options_echappees2 = array();

		$options_echappees1['pers_nom'] =$this->input->post('nom');
		$options_echappees1['pers_prenom'] =$this->input->post('prenom');
		$options_echappees1['pers_sexe'] =$this->input->post('genre');
		$options_echappees1['pers_adress'] =$this->input->post('adr');
		$options_echappees1['pers_datenais'] =$this->input->post('datnais') ;
		$options_echappees1['pers_email'] =$this->input->post('email');
		$options_echappees1['pers_type'] ='PHYSIQUE';
		$options_echappees1['pers_pseudo'] =$this->input->post('pseudo');

		$options_echappees2['utilisateur_profil'] ='particulier';
		$options_echappees2['utilisateur_pseudo'] =$this->input->post('pseudo');
		$options_echappees2['utilisateur_password'] =$this->input->post('pass');
		$options_echappees2['utilisateur_statut'] ='actif';

		$resultat = $this->personneManager->create($options_echappees1);
		$resultat = $this->utilisateurManager->create($options_echappees2);

		?>
		<script type="text/javascript">alert('Compte Créé');</script>

		<?php echo '<meta http-equiv="refresh" content="0;URL='.site_url('inscription/inscription').'?option=particulier">';	
		}
	}


	

}

}
?>