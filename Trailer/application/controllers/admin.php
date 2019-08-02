<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function index(){
      $this -> load -> view("login");
  }

  public function verificar(){
    $this->load->model('db_model');
    $this->db_model->Login();
  }
}
?>
