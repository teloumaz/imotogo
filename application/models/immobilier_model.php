<?php
require_once "MY_Model.php";
class Immobilier_model extends MY_Model
{
protected $table='immobilier';


public function count()
{
return $this->db->count_all($this->table);
}


public function valid_immo($where, $options_echappees = array())
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

}