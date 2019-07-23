<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Utilisateur extends CI_Controller
{
public function __construct(){
$this->load->model('utilisateur_model','utilisateurManager');
$this->load->library('form_validation');
}

public function newUser(){
$this->form_validation->set_rules('nom', 'nom', 'trim|required|xss_clean|callback_verif_user['.$this->input->post('prenoms').']');
        $this->form_validation->set_rules('prenoms', 'prénoms', 'trim|required|xss_clean');
        $this->form_validation->set_rules('dateNais', 'date de naissance', 'trim|xss_clean|callback_check_date');
        $this->form_validation->set_rules('sexe', 'sexe', 'trim|required|xss_clean');
        $this->form_validation->set_rules('titre', 'titre', 'trim|required|xss_clean');
		$this->form_validation->set_rules('profil', 'profil', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
		$this->index();
		}else{
$options_echappees = array();
$options_non_echappees = array();
$options_echappees['nom'] = $this->input->post('nom');
$options_echappees['prenoms'] = $this->input->post('prenoms');
$options_echappees['login'] = substr($this->input->post('prenoms'),0,1) . $this->input->post('nom');
$options_echappees['password'] =$this->encrypt->encode( substr($this->input->post('prenoms'),0,1) . $this->input->post('nom') );
$options_echappees['sexe'] =$this->input->post('sexe');
$options_echappees['dateDeNaissance'] =$this->input->post('dateNais');
$options_echappees['titre'] =$this->input->post('titre');


	if($this->input->post('id')!=null){ 
	if($this->input->post('profil')==2){
	$this->changerDecideur();
    $options_non_echappees['debutFonction'] ='NOW()';
	$options_echappees['profil'] =$this->input->post('profil');
	if($options_echappees['profil']==null){
		$options_echappees['profil']=3;
		}
	$this->modifierUser($options_echappees,$options_non_echappees);
		
										}
	else{
		$options_echappees['profil'] =$this->input->post('profil');
		if($options_echappees['profil']==null){
		$options_echappees['profil']=3;
		}
		$this->modifierUser($options_echappees,$options_non_echappees);
		}
	}
	
	
else {
	if($this->input->post('profil')==2){
$this->changerDecideur();
$options_echappees['profil'] =$this->input->post('profil');		
$options_non_echappees['debutFonction'] ='NOW()';
if($options_echappees['profil']==null){
		$options_echappees['profil']=3;
		}
$resultat = $this->userManager->create($options_echappees,$options_non_echappees);
redirect(site_url('utilisateur/utilisateur'));
															}
else{ 
$options_echappees['profil'] =$this->input->post('profil');
if($options_echappees['profil']==null){
		$options_echappees['profil']=3;
		}
$resultat = $this->userManager->create($options_echappees);
redirect(site_url('utilisateur/utilisateur'));
}
}
}
}

public function modifierUser($e,$ne){
$options_echappees = array();
$options_echappees =$e;
$options_non_echappees = array();
$options_non_echappees =$ne;
$where=array('id'=>$this->input->post('id'));

$resultat = $this->userManager->update($where,$options_echappees,$options_non_echappees);
redirect(site_url('utilisateur/utilisateur'));

}


public function desactiverCompte(){
$options_echappees = array();
$options_echappees['suppr'] = 1;
$where=array('id'=>$this->input->get_post('supId'));
$resultat = $this->userManager->update($where,$options_echappees);
redirect(site_url('utilisateur/utilisateur'));
}

public function activerCompte(){
$options_echappees = array();
$options_echappees['suppr'] = 0;
$where=array('id'=>$this->input->get_post('supId'));
$resultat = $this->userManager->update($where,$options_echappees);
redirect(site_url('utilisateur/utilisateur'));
}

public function changePassword(){
$options_echappees = array();
$options_echappees['password']=$this->encrypt->encode($this->input->post('password'));
$where=array('id'=>$this->userManager->retourneId($this->session->userdata('pseudo')));
$resultat = $this->userManager->update($where,$options_echappees);

if($resultat){
	$this->load->model('administrator_model','adminManager');
	$this->adminManager->deconnect();
	redirect(site_url('admin/connexion'));
	}
	else {
    $data=array();
	$data['pseudo']=$this->session->userdata('pseudo');
		redirect(site_url('admin/index/changerPass',$data));
}
}

public function retourneProfil($pro){
	return $this->utilisateurManager->retourneProfil($pro);
	}
	
public function listerUtilisateurs(){
	$query=$this->utilisateurManager->liste();
	$resultat = $query->result_array();
	
	if (empty($resultat)) {
            return false;
        } else {
            return $resultat;
        }
	}
	
public function rechercher($id){
	$resultat=$this->utilisateurManager->rechercher($id);
	if($resultat)
	{
	
		return true;
	}
	else{
	
	return false;
	}
}

public function droits(){
	$data=Array();
	$data['edId']=$this->input->post('edId');
	$data['user']=$this->userManager->rechercher2($this->input->post('edId'));
	$data['pro']=$this->input->post('proId');
	$data['rights']=$this->powerManager->rapatriement($this->input->post('edId'),$this->input->post('proId'));
	$data['left']=$this->powerManager->getLeft($this->input->post('edId'),$this->input->post('proId'));
	
	$attribut=$this->input->post('addId');
	$spoiler=$this->input->post('delId');
	
if($attribut!=''){
	
$options_echappees = array();
$options_echappees['user']=$this->input->post('us');
$options_echappees['permission']=$this->input->post('addId');
$resultat = $this->powerManager->create($options_echappees);	

$data['edId']=$this->input->post('us');
$data['user']=$this->input->post('us');	
$data['pro']=$this->input->post('profil');
$data['rights']=$this->powerManager->rapatriement($this->input->post('us'),$this->input->post('profil'));
$data['left']=$this->powerManager->getLeft($this->input->post('us'),$this->input->post('profil'));	

	if($this->userManager->creances($this->session->userdata('profil'),$this->userManager->diplomate('OuvrirDroits'))){
$this->load->view('utilisateur/droits',$data);
}else $this->load->view('achtung');
		}
	
else if($spoiler!=''){

$where=array('permission'=>$this->input->post('delId'),'user'=>$this->input->post('us'));
$this->powerManager->delete($where);

$data['edId']=$this->input->post('us');
$data['user']=$this->input->post('us');	
$data['pro']=$this->input->post('profil');
$data['rights']=$this->powerManager->rapatriement($this->input->post('us'),$this->input->post('profil'));
$data['left']=$this->powerManager->getLeft($this->input->post('us'),$this->input->post('profil'));	

if($this->userManager->creances($this->session->userdata('profil'),$this->userManager->diplomate('OuvrirDroits'))){
$this->load->view('utilisateur/droits',$data);
}else $this->load->view('achtung');
		}
	else
	if($this->userManager->creances($this->session->userdata('profil'),$this->userManager->diplomate('OuvrirDroits'))){
$this->load->view('utilisateur/droits',$data);
}else $this->load->view('achtung');
	}


}