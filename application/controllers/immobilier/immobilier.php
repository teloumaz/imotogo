<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Annonce extends CI_Controller
{
public function __construct()
{
parent::__construct();
$this->load->model('annonce_model','annonceManager');
$this->load->model('personne_model','personneManager');
$this->load->library('form_validation');
}

public function index(){

}

public function detail(){
	$this->load->view('annonce/detail');
}

public function newannonce(){
	$data['pseudo']=$_SESSION['pseudo'];
	$query=$this->annonceManager->selectpers($_SESSION['pseudo']);

	foreach ($query->result() as $row){
  		$data['proprietaire']=$row->pers_nom.' '.$row->pers_prenom;
	}
	$this->load->view('annonce/newannonce',$data);
}

public function add(){
		
		if ($this->form_validation->run()) {
		/*echo 'OK';*/
				    
		$options_echappees = array();
		$options_echappees['propietaire'] =$this->input->post('propietaire');
		$options_echappees['categorie'] =$this->input->post('categ');
		$options_echappees['localisation'] =$this->input->post('localisation');
		$options_echappees['imo_prixvente'] =$this->input->post('prix');
		$options_echappees['imo_superficie'] =$this->input->post('superficie');
		$options_echappees['imo_nbrchambre'] =$this->input->post('nbrch');
		$options_echappees['imo_nbretage'] =$this->input->post('nbretg');
		$options_echappees['imo_nbrsalon'] =$this->input->post('nbrsalon');
		$options_echappees['imo_nbrsalebain'] =$this->input->post('nbrdouch');
		$options_echappees['imo_balcon'] =$this->input->post('nbrcbalcon');
		$options_echappees['imo_parking'] =$this->input->post('nbrparking');
		$options_echappees['imo_disponibilite'] ="1";
		$options_echappees['imo_modeofre'] =$this->input->post('modofr');
		$options_echappees['imo_responsable'] =$this->input->post('resp');

		$resultat = $this->agenceManager->create($options_echappees);

		?>
		<script type="text/javascript">alert('Annonce encours de validation');</script>

		<?php echo '<meta http-equiv="refresh" content="2;URL='.site_url('annonce/newannonce').'">';
			/*redirect('inscription/inscription?option=agence');*/	
		}

}

public function mesannonces(){
	$this->load->view('annonce/mesannonces');
}


}