<?php
require_once "MY_Model.php";
class Personne_model extends MY_Model
{
protected $table='personne';

public function count()
{
return $this->db->count_all($this->table);
}

public function selectpers($pseudo){
return $this->db->select('*')
			->from('personne')
			->where('pers_pseudo',$pseudo)
			->get();
}

public function selectpersag($pseudo){
	return $this->db->select('pers_nom')
			->from('personne')
			->where('pers_pseudo',$pseudo)
			->where('pers_type','MORALE')
			->get();
}

}