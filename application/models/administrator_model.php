<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator_model extends CI_Model {
    
    private $_table = "utilisateurs";
    
    function __construct() {
        $this->load->library('encrypt');
    }
    
    public function validate($login, $password) {
        if (($passwd_crypt = $this->_getUser($login)) !== FALSE)
            return (bool) ($password == $passwd_crypt);
        return false;
    }
    
    private function _getUser($login) {
        $user = $this->db->select(array('login', 'password'))->get_where($this->_table, array('login' => $login,'suppr'=>0))->row();
        if (isset($user->password))
            return $this->encrypt->decode($user->password);
        return false;
    }
	
	public function getUserType($login){
	$user = $this->db->select(array('login', 'profil'))->get_where($this->_table, array('login' => $login))->row();
		return $user->profil;
	}
	
	public function firstConnection($login){
		$user = $this->db->select(array('login', 'password'))->get_where($this->_table, array('login' => $login))->row();
if($user->login==$this->encrypt->decode($user->password)){
	return true;
	}
else return false;		
	}
	
public function deconnect(){
$this->load->helper('cookie');
		delete_cookie('189CDS8CSDC98JCPDSCDSCDSCDSD8C9SD');
		delete_cookie('1C89DS7CDS8CD89CSD7CSDDSVDSIJPIOCDS');
}

}