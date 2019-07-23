<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Visite extends CI_Controller
{
public function __construct()
{
parent::__construct();
$this->load->model('annonce_model','annonceManager');
$this->load->model('immobilier_model','immobilierManager');
$this->load->model('personne_model','personneManager');
$this->load->model('agence_model','agenceManager');
$this->load->model('visite_model','visiteManager');
$this->load->library('form_validation');
}

public function index(){
	$this->newvisite();
}


public function detail(){
	//$mavariable2=$this->input->get('mavariable1');
	//echo $mavariable2;

	if (isset($_POST['annonce_id'])) {
		$id=(int)htmlspecialchars($_POST['annonce_id']);
		$data['annonces']=$this->annonceManager->annonces($id);
		$this->load->view('annonce/detailannonce',$data);
	}
	else{
		echo 'ERROR';
	}
}


public function newvisite(){

	$data['pseudo']=$_SESSION['pseudo'];
	$query=$this->personneManager->selectpers($_SESSION['pseudo']);
	$data['agence_id']=$this->input->get('id');
	$data['agence_numident']=$this->input->get('agence');

	foreach ($query->result() as $row){
  		$data['proprietaire']=$row->pers_nom.' '.$row->pers_prenom;
	}

	$this->load->view('visite/demandevisite',$data);
}

public function add(){

	//if ($this->form_validation->run()) {
	/*echo 'OK';*/

	/*Enrégistrement d'un fichier*/
	$config['upload_path'] = './assets/apercues_imo/';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size'] = '2048000';
	/*		$config['max_width'] = '35';
	$config['max_height'] = '20';*/
	$this->load->library('upload', $config);

	$this->upload->do_upload('apercu1');

	if (!$this->upload->do_upload('apercu1')) 
	{
	echo 'YOU LOST!';
	}
	else
	{
	$upload_data = $this->upload->data();
			    
	$options_echappees1 = array();
	$options_echappees2 = array();
	$imo_ref='IMO/'.rand();

	//Immobilier
	$options_echappees1['imo_ref']=$imo_ref;
	$options_echappees1['proprietaire']=$this->input->post('annonceur');
	$options_echappees1['categorie']=$this->input->post('categ');
	$options_echappees1['localisation']=$this->input->post('localisation');
	$options_echappees1['imo_prixvente']=$this->input->post('prix');
	$options_echappees1['imo_superficie']=$this->input->post('superficie').'  '.$this->input->post('area');
	$options_echappees1['imo_description']=$this->input->post('otr');
	$options_echappees1['imo_modeofre']=$this->input->post('modofr');
	$options_echappees1['imo_responsable']=$this->input->post('annonceur');
	$options_echappees1['imo_disponibilite']=0;
	$options_echappees1['apercu1']=$upload_data['file_name'];

	//Annonce
	$options_echappees2['imo_ref'] =$imo_ref;
	$options_echappees2['annonce_descrip'] =$this->input->post('otr');
	$options_echappees2['annonce_date'] =date('Y-m-d');
	$options_echappees2['annonce_statut'] =1;
	$options_echappees2['annonceur'] =$this->input->post('annonceur');
	$options_echappees2['agence_id'] =$this->input->post('agence_id');
	$options_echappees2['agence_numident'] =$this->input->post('agence_numident');


	$resultat = $this->immobilierManager->create($options_echappees1);
	$resultat = $this->annonceManager->create($options_echappees2);

	?>
	<script type="text/javascript">alert('Annonce encours de validation');</script>

	<?php $this->newannonce(); /*echo '<meta http-equiv="refresh" content="2;URL='.site_url('annonce/annonce/newannonce').'">';*/
	}

	//}
}

public function visiteavalider(){
	//$query=$this->annonceManager->annonceavalider();
	//$data['result']=$query->result();
	$data['pseudo']=$_SESSION['pseudo'];

	$this->load->view('visite/visiteavalider',$data);
}

public function validerannonce(){
	$data['ident']=$this->input->get('id');
	$this->load->view('annonce/validerannonce',$data);
}

public function valider(){
	$id=$this->input->post('ident');
	$accord=$this->input->post('accord');

	if ($accord=="Valider") {
		$observation='ok';
		$mess='Validée';
	}
	if ($accord=="Rejeter") {
		$observation=$this->input->post('motif');
		$mess='Rejetée';
	}

	$options_echappees1 = array();
	$options_echappees2 = array();

	//Annonce
	$options_echappees1['annonce_statut'] =2;
	$options_echappees1['observation'] =$this->input->post('motif');

	//Immobilier
	$options_echappees2['imo_disponibilite'] =1;

	echo $mess;


	$resultat=$this->annonceManager->valid_annonce($id,$options_echappees1);
	$resultat=$this->immobilierManager->valid_immo($id,$options_echappees2);

	?>
	<script type="text/javascript">alert('Annonce <?php echo $mess; ?>');</script>

	<?php $this->annonceavalider(); /*echo '<meta http-equiv="refresh" content="2;URL='.site_url('annonce/annonce/validerannonce').'">';*/
}

public function annoncepublier(){
	$query=$this->annonceManager->annoncepublier();
	$data['result']=$query->result();
	$data['pseudo']=$_SESSION['pseudo'];

	$this->load->view('annonce/annoncepublier',$data);
}

public function choixagence(){
	$query=$this->agenceManager->liste();
	$data['result']=$query->result();
	$data['pseudo']=$_SESSION['pseudo'];

	$this->load->view('annonce/choixagence',$data);
}


}