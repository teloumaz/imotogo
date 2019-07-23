<?php
class MY_Model extends CI_MODEL
{
public function create($options_echappees = array(),$options_non_echappees = array())
{
if(empty($options_echappees) AND empty($options_non_echappees))
{
return false;
}
else
{
return (bool) $this->db->set($options_echappees)
->set($options_non_echappees, null,
false)
->insert($this->table);
}
}

public function update($where, $options_echappees = array(),$options_non_echappees = array())
{
// Vérification des données à mettre à jour
if(empty($options_echappees) AND empty($options_non_echappees))
{
return false;
}
// Raccourci dans le cas où on sélectionne l'id
if(is_integer($where))
{$where = array('id' => $where);
}
return (bool) $this->db->set($options_echappees)
->set($options_non_echappees, null,
false)
->where($where)
->update($this->table);
}

public function delete($where)
{
if(is_integer($where))
{
$where = array('id' => $where);
}
return (bool) $this->db->where($where)
->delete($this->table);
}

public function listeFiltree($select = null,$where=array(),$nb,$debut)
{
return $this->db->select($select)
->from($this->table)
->where($where)
->limit($nb,$debut);
}

public function liste(){
	return $this->db->get($this->table);
	}
	
public function creances($creancier,$creance){
$r = $this->db->query("select p.id, p.permission, p.profil,p.user,u.id from pouvoir p,utilisateurs u where (p.profil='".$creancier."' and p.permission='".$creance."') or (p.user=u.id and u.id='".$this->session->userdata('idUser')."' and p.permission='".$creance."')  ");
$r->result();
if($r->result()!=null){
	return true;
	}		
	return false;
	}


public function diplomate($cours){
	$query = $this->db->query("select id from (`permission`) where libellePermission='".$cours."' ");

foreach ($query->result() as $row)
{
   return $row->id;
}
}

}
