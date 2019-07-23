<?php
	require_once "MY_Model.php";

	class Annonce_model extends MY_Model{
		protected $table='annonce';


		public function count(){
			return $this->db->count_all($this->table);
		}


		/*les annonces à valider*/
		public function annonceavalider($agence){
			return $this->db->select('g.agence_nom,g.numident,a.imo_ref,a.annonce_date,a.annonceur,i.proprietaire,i.categorie,i.localisation,i.	imo_prixvente,i.imo_superficie,i.imo_modeofre,i.apercu1,a.annonce_statut')
						->from('agence as g')
						->join('annonce as a','g.agence_id=a.agence_id')
						->join('immobilier as i','a.imo_ref=i.imo_ref')
						->where('annonce_statut',1)
						->where('agence_nom',$agence)
						->order_by('annonce_date desc')
						->get();
		}

		/*les annonces publiées*/
		public function annoncepublier(){
			return $this->db->select('a.annonce_id,a.annonce_descrip,a.imo_ref,a.annonce_date,a.annonceur,i.proprietaire,i.categorie,i.localisation,i.	imo_prixvente,i.imo_superficie,i.imo_modeofre,i.apercu1,a.annonce_statut')
			->from('annonce as a')
			->join('immobilier as i','a.imo_ref=i.imo_ref','left')
			->where('annonce_statut',2)
			->order_by('annonce_date desc')
			->get();
		}


		/*total annonce publier*/
		public function countannoncepublier(){
			return $this->db->select('COUNT(annonce_id) as nb')
			->from('annonce as a')
			->join('immobilier as i','a.imo_ref=i.imo_ref','left')
			->where('annonce_statut',2)
			->get();
		}


		public function valid_annonce($where, $options_echappees = array())
		{
		// Vérification des données à mettre à jour
		if(empty($options_echappees))
		{
		return false;
		}

		return (bool) $this->db->set($options_echappees)
		->where('imo_ref',$where)
		->update($this->table);
		}


		/*détailles dune annonce*/
		public function annonces($id){
			$query = $this->db->select('g.agence_nom,a.annonce_id,a.annonce_descrip,a.imo_ref,a.annonce_date,a.annonceur,i.proprietaire,i.categorie,i.localisation,i.	imo_prixvente,i.imo_superficie,i.imo_modeofre,i.apercu1,i.apercu2,i.apercu3,a.annonce_statut')
								->from('agence as g')
								->join('annonce as a','g.agence_id=a.agence_id')
								->join('immobilier as i','a.imo_ref=i.imo_ref')
								->where('annonce_id',$id)
								->where('annonce_statut',2)
								->order_by('annonce_date desc')
								->get();
			return $query->row();
						
		}


		/*mes annonces*/
		public function mesannonces($pseudo){
			return $this->db->select('a.annonce_statut,a.annonce_id,a.annonce_descrip,a.imo_ref,a.annonce_date,a.annonceur,i.proprietaire,i.categorie,i.localisation,i.	imo_prixvente,i.imo_superficie,i.imo_modeofre,i.apercu1,a.annonce_statut')
			->from('personne as p')
			->join('annonce as a','p.pers_id=a.pers_id')
			->join('immobilier as i','a.imo_ref=i.imo_ref','left')
			->where('p.pers_pseudo',$pseudo)
			->order_by('annonce_date desc')
			->get();
		}


	}