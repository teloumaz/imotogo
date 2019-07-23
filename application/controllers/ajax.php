<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Ajax extends CI_Controller
{
public function __construct()
{
parent::__construct();
$this->load->library('encrypt');
$this->load->library('form_validation');
$this->load->model('utilisateur_model', 'userManager');
$this->load->model('pouvoir_model', 'powerManager');
}

public function index(){}


public function dashboard(){
$this->load->view('admin/dashboard');

}




}