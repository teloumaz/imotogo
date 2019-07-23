<?php
	require_once "MY_Model.php";

	class Visite_model extends MY_Model{
		protected $table='annonce';


		public function count(){
			return $this->db->count_all($this->table);
		}


		public function annonceavalider(){
			return $this->db->select('a.imo_ref,a.annonce_date,a.annonceur,i.proprietaire,i.categorie,i.localisation,i.	imo_prixvente,i.imo_superficie,i.imo_modeofre,i.apercu1,a.annonce_statut')
						->from('annonce as a')
						->join('immobilier as i','a.imo_ref=i.imo_ref','left')
						->where('annonce_statut',1)
						->get();
		}

		public function annoncepublier(){
			return $this->db->select('a.annonce_id,a.annonce_descrip,a.imo_ref,a.annonce_date,a.annonceur,i.proprietaire,i.categorie,i.localisation,i.	imo_prixvente,i.imo_superficie,i.imo_modeofre,i.apercu1,a.annonce_statut')
			->from('annonce as a')
			->join('immobilier as i','a.imo_ref=i.imo_ref','left')
			->where('annonce_statut',2)
			->order_by('annonce_date')
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


		public function annonces($id){
			$query = $this->db->select('g.agence_nom,a.annonce_id,a.annonce_descrip,a.imo_ref,a.annonce_date,a.annonceur,i.proprietaire,i.categorie,i.localisation,i.	imo_prixvente,i.imo_superficie,i.imo_modeofre,i.apercu1,a.annonce_statut')
								->from('agence as g')
								->join('annonce as a','g.agence_id=a.agence_id','left')
								->join('immobilier as i','a.imo_ref=i.imo_ref','left')
								->where('annonce_id',$id)
/*								->and('annonce_statut',2)*/
								->get();
			return $query->row();
						
		}
	}