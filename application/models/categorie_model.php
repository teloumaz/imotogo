<?php
require_once "MY_Model.php";
class Categorie_model extends MY_Model
{
protected $table='categorie';

public function count()
{
return $this->db->count_all($this->table);
}

public function get_stock($nb, $debut = 0)

{
if(!is_integer($nb) OR $nb < 1 OR !is_integer($debut) OR $debut
< 0)
{
return false;
}
return $this->db->select('*',
false)
->from($this->table)
->order_by('libelleCategorie', 'asc')
->limit($nb, $debut)
->get()
->result();
}
}