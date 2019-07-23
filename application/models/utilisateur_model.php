<?php
require_once "MY_Model.php";
class Utilisateur_model extends MY_MODEL
{
protected $table='utilisateur';


public function retourneProfil($pseudo){
$sql = "SELECT * FROM utilisateur WHERE utilisateur_pseudo ='".$pseudo."'";
$r=$this->db->query($sql);
return (int) $r->result();
foreach ($r as $row)
{
   return $row->id;
}
}


public function retourneId($pseudo){
$sql = "SELECT utilisateur_id FROM utilisateur WHERE utilisateur_pseudo = '".$pseudo."' ";
$r=$this->db->query($sql)->result();
foreach ($r as $row)
{
   return $row->id;
}
}

public function rechercher($id){
$sql = "SELECT * FROM utilisateur WHERE utilisateur_id ='".$id."' ";
$r=$this->db->query($sql)->result();
foreach ($r as $row)
{
   return $row->nom;
}
}

public function rechercher2($id){
$sql = "SELECT * FROM utilisateur WHERE utilisateur_id = '".$id."'";
$r=$this->db->query($sql)->result();

   return $r;
}


public function count()
{
return $this->db->count_all($this->table);
}



}