<?php
class Categorie extends CI_Controller{
	protected $appel='Categories';
public function __construct()
{

parent::__construct();


$this->load->model('categorie_model','categorieManager');
$this->load->model('fourniture_model','fournitureManager');
$this->load->library('pagination');
$this->load->library('form_validation');

}

public function indexer($g_nb_fourniture = 1)
{
	$data = array();
$nb_fourniture_total = $this->categorieManager->count();
if($g_nb_fourniture > 1)
{
if($g_nb_fourniture <= $nb_fourniture_total)
{
$nb_fourniture = intval($g_nb_fourniture);
}
else
{
$nb_fourniture = 1;
}
}
else
{
$nb_fourniture = 1;
}
$offset = $this->uri->segment(4, 0);
$this->pagination->initialize(array('base_url' => base_url() .
'index.php/categorie/categorie/indexer',
'total_rows' => $nb_fourniture_total,
'per_page' => 5,
'next_link'=> 'Page suivante',
'prev_link'=> 'Page précédente',
'first_link'=> 'Début',
'last_link'=> 'Fin',
'num_links' => 1,
'uri_segment' =>4
));

$data['pagination'] = $this->pagination->create_links();
$data['nb_fournitures'] = $nb_fourniture_total;
$data['fournitures'] = $this->categorieManager->get_stock(5, $nb_fourniture-1);
$data['appel']=$this->appel;

if($this->categorieManager->creances($this->session->userdata('profil'),$this->categorieManager->diplomate('OuvrirCategorie'))){
$this->load->view('/categorie/categories',$data);
}else  $this->load->view('achtung');
    
}

public function index($g_nb_fourniture = 1){
	$this->load->library('pagination');

$data = array();
$nb_fourniture_total = $this->fournitureManager->count();
if($g_nb_fourniture > 1)
{
if($g_nb_fourniture <= $nb_fourniture_total)
{
$nb_fourniture = intval($g_nb_fourniture);
}
else
{
$nb_fourniture = 1;
}
}
else
{
$nb_fourniture = 1;
}
$offset = $this->uri->segment(4, 0);
$this->pagination->initialize(array('base_url' => base_url() .
'index.php/fourniture/fourniture/index',
'total_rows' => $nb_fourniture_total,
'per_page' => 5,
'next_link'=> 'Page suivante',
'prev_link'=> 'Page précédente',
'first_link'=> 'Début',
'last_link'=> 'Fin',
'num_links' => 1,
'uri_segment' =>4
));

$data['pagination'] = $this->pagination->create_links();
$data['nb_fournitures'] = $nb_fourniture_total;
$data['fournitures'] = $this->fournitureManager->get_stock(5, $nb_fourniture-1);
$data['appel']=$this->appel;
if($this->categorieManager->creances($this->session->userdata('profil'),$this->categorieManager->diplomate('OuvrirFournitures'))){
$this->load->view('/fourniture/fournitures',$data);
}
else  $this->load->view('achtung');
}

public function newCategorie(){
$this->form_validation->set_rules('libelleCategorie', 'Libellé', 'trim|required|xss_clean|is_unique[categorie.libelleCategorie]');
$this->form_validation->set_message('is_unique', 'Cette catégorie existe déjà.');
if ($this->form_validation->run() == FALSE) {
	    
		$this->index();
		}else{
$options_echappees = array();
$options_echappees['libelleCategorie'] =$this->input->post('libelleCategorie');
$resultat = $this->categorieManager->create($options_echappees);
$this->index();
}
}
public function modifierCategorie(){
$this->form_validation->set_rules('libelleCateg', 'Libellé', 'trim|required|xss_clean|is_unique[categorie.libelleCategorie]');
$this->form_validation->set_message('is_unique', 'Cette catégorie existe déjà.');
if ($this->form_validation->run() == FALSE) {
		$this->indexer();
		}else{
$options_echappees = array();
$options_echappees['libelleCategorie'] = $this->input->post('libelleCateg');
$where=array('id'=>$this->input->post('id'));
$resultat = $this->categorieManager->update($where,$options_echappees);
$this->indexer();
}
}

public function listerCategories(){

$select='libelleCategorie';
$where=array("suppr"=>0);
$nb=15;
$debut=1;
$this->categorieManager->liste($select,$where,$nb,$debut);

}

public function supprimerCategorie(){
$options_echappees = array();
$options_echappees['suppr'] = 1;
$where=$this->id;
$resultat = $this->categorieManager->update($where,$options_echappees);

}

public function newCat(){
$this->form_validation->set_rules('libelleCategorie', 'Libellé', 'trim|required|xss_clean|is_unique[categorie.libelleCategorie]');
$this->form_validation->set_message('is_unique', 'Cette catégorie existe déjà.');
if ($this->form_validation->run() == FALSE) {
		$this->indexer();
		}else {			
$options_echappees = array();
$options_echappees['libelleCategorie'] =$this->input->post('libelleCategorie');
$resultat = $this->categorieManager->create($options_echappees);
$this->indexer();
}

}

}