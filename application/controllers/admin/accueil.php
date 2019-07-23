<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Accueil extends CI_Controller
{
public function __construct()
{
parent::__construct();
$this->load->model('connexion_model','connexionManager');
$this->load->model('utilisateur_model','utilisateurManager');
$this->load->model('annonce_model','annonceManager');
$this->load->model('immobilier_model','immobilierManager');
$this->load->model('personne_model','personneManager');
$this->load->model('agence_model','agenceManager');
$this->load->library('form_validation');
$this->load->library('pagination');
}

public function index($g_nb = 1){

$nbtotal= $this->annonceManager->countannoncepublier();

if($g_nb > 1)
{
if($g_nb <= $nbtotal)
{
$nb = intval($g_nb);
}
else
{
$nb = 1;
}
}
else
{
$nb = 1;
}

$offset = $this->uri->segment(4, 0);
$this->pagination->initialize(array('base_url' => base_url() .
'index.php/admin/accueil/index',
'total_rows' => $nb,
'per_page' => 5,
'next_link'=> 'Page suivante',
'prev_link'=> 'Page précédente',
'first_link'=> 'Début',
'last_link'=> 'Fin',
'num_links' => 1,
'uri_segment' =>4
));

$data['pagination'] = $this->pagination->create_links();
$data['nb'] = $nbtotal;
$query=$this->annonceManager->annoncepublier(5,$nb-1);
$data['result']=$query->result();

$this->load->view('admin/accueil',$data);
}

public function publication_annonce(){
	$this->load->view('aide');
}

public function connexion($error='error'){
        $this->load->model('connexion_model');
        //verifie les parametres de connexion
        $this->session->set_userdata('pseudo', $_POST['pseudo']);
        $this->session->set_userdata('pass', $_POST['pass']);
        $username=$this->session->userdata('pseudo');
        $pass=$this->session->userdata('pass');

        if(isset($username) && isset($pass)){
            $identif = htmlspecialchars($username);
            $pass    = htmlspecialchars($pass);
            
            $result = $this->connexionManager->getConnexion($identif, $pass);
            $profil=$result->utilisateur_profil;
            if(isset($result)){

                $data['pseudo']=$username;
                $query=$this->annonceManager->annoncepublier();
                $result=$query->result();
                $data['result']=$result;
                $data['profil']=$profil;
                $this->session->set_userdata('profil', $profil);

                $query2=$this->personneManager->selectpersag($username);
                $result2=$query2->result();
                foreach ($result2 as $key => $value) {
                    $agence=$value->pers_nom;
                }
                $this->session->set_userdata('agence', $agence);

                $this->load->view('admin/accueil_client',$data);

            }
            else{
                $data = array();
                $data['error'] = 'error';
                $this->load->view('admin/accueil',$data);
            }
        }
        else{
           redirect('admin/accueil');
        }
    }


public function accueilclient(){
    $data['pseudo']=$_SESSION['pseudo'];
    $query=$this->annonceManager->annoncepublier();
    $data['result']=$query->result();
    $this->load->view('admin/accueil_client',$data);
}


public function deconnexion(){
	$this->session->sess_destroy();
	$this->index();
}


}