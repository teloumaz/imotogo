<?php
require_once "MY_Model.php";
class Agence_model extends MY_Model
{
protected $table='agence';

public function count()
{
return $this->db->count_all($this->table);
}




}