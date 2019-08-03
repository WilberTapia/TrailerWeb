<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class db_model extends CI_Model{

  public function Login(){
    // code...
try{
    $base=new PDO("mysql:host=localhost; dbname=dbtrailer","root","");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM usuarios WHERE USUARIO=:login AND PASSWORD=:password";

    $CI =& get_instance();
    $CI ->db->where('usuario', $_POST["login"]);
    $CI ->db->where('password', $_POST["password"]);
    $rs = $CI->db->get('usuarios')->result_array();

    $resultado=$base->prepare($sql);
    $login=htmlentities(addslashes($_POST["login"]));
    $password=htmlentities(addslashes($_POST["password"]));

    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":password",$password);
    $resultado->execute();

    $numero_registro=$resultado->rowCount();
    if($numero_registro!=0){
        session_start();
        $_SESSION['user'] = $rs[0]['usuario'];
        $_SESSION['nombre'] = $rs[0]['Nombre'];
        redirect ('main/index');
    }else{
        $errorlogin = 'Usuario o Contraseña son invalidos';
        redirect('admin');

    }

}catch(Exception $e){
    die("Error: ".$e->getMessage());
}

  }

  public function buscar(){
  $rs = $this->db->get('peliculas');
  return $rs->result();
  }

  public function buscart($id){
    $this ->db->where('trailerid',$id);
    $rs = $this->db->get('peliculas');
  return $rs->result();
  }

  public function buscar_x_id($id){
    $this ->db->where('id',$id);
    $rs = $this->db->get('peliculas');
  return $rs->result();
  }

  public function delete($id){
    $sql = 'Delete from peliculas where id =?';
    $this->db->query($sql,[$id]);
    // code...
  }

  public function add($datos){
    $this->db->insert('peliculas',$datos);
  }

  public function update($datos){
    $this->db->where('id',$datos['id']);
    $this->db->update('peliculas',$datos);
  }
}
?>
