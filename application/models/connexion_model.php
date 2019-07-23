<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(!defined('BASEPATH')) exit ('No direct script acces allowed');

class Connexion_model extends CI_Model{
    protected $table = 'utilisateur';
    
    public function getConnexion($user, $password){
       $sql = "SELECT * FROM utilisateur WHERE utilisateur_pseudo=? and utilisateur_password=?";
       $query = $this->db->query($sql, array($user, $password));
       return $query->row();
       //return $this->db->query($sql, array($user, $password));
    }
}

/* End of file connexion_model.php */
/* Location: ..application/models/connexion.php */
