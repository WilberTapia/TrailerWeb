<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

  public function index(){
    $this -> load -> view("index");
  }

  public function trailer(){
    $this -> load -> model('db_model');
    $result['datos'] = $this -> db_model -> buscar();
    $this -> load -> view("trailer", $result);
  }

  public function contacto(){
    $this -> load -> view("contacto");
  }

  public function cerrar(){
    session_start();
    $_SESSION = array();
    session_destroy();
    redirect("main/index");
  }

  public function borrar($id=0){
    $this->load->model('db_model');
    $this->db_model->delete($id);
    redirect('main/trailer');
  }

  public function agregar(){
    $this->load->view('formulario');
  }

  public function editar($id=0){
    $this->load->model('db_model');
    $result['datos'] = $this-> db_model -> buscar_x_id($id);
    $this -> load -> view('formulario',$result);
  }

  public function mostrar(){
    $this->load->model('db_model');
    $result['datos'] = $this-> db_model -> buscart($_GET['id']);
    $this -> load -> view('mostrar',$result);
  }

  public function guardar(){
  $this->load->model('db_model');
    if ($_POST) {
      if (isset($_POST['id']) && $_POST['id'] > 0) {
        $peliculas = $_POST;
        $this->db_model->update($peliculas);
        redirect('main/trailer');
      }else{
        $patron = '%^ (?:https?://)? (?:www\.)? (?: youtu\.be/ | youtube\.com (?: /embed/ | /v/ | /watch\?v= ) ) ([\w-]{10,12}) $%x';
        $url = $_POST['trailerid'];
        $array = preg_match($patron, $url, $parte);
        if (false !== $array) {
          $_POST['trailerid'] = $parte[1];
        }
        $peliculas = $_POST;
        $this->db_model->add($peliculas);
        redirect('main/trailer');
      }
    }
  }

}
?>
