<?php

/**
 *
 */
class Usuario
{
private $id;
private $name;
private $username;
private $mail;
private $pass;
private $reas;
private $avatar;

public function __construct($id=null,$name,$username,$mail,$pass,$repass,$avatar){
 
  $this->name = $name;
  $this->username = $username;
  $this->mail = $mail;
  if ($id=null) {
    $this->pass = password_hash($pass, PASSWORD_DEFAULT);
  }else
  $this->pass = $pass;
  $this->repassword = $repass;
  $this->avatar = $avatar;
}
public function getId(){
  return $this->id;
}
public function setId($id){
  $this->id = $id;
}
public function getName(){
  return $this->name;
}
public function setName($name){
  $this->name = $name;
}
public function getMail(){
  return $this->mail;
}
public function setMail($mail){
  $this->mail = $mail;
}
public function getPass(){
  return $this->pass;
}
public function setPass($pass){
  $this->pass = $pass;
}
public function getRepass(){
  return $this->repas;
}
public function setRepass($repass){
  $this->repas = $repass;
}
public function getAvatar(){
 return $this->avatar;
}
public function setAvatar($avatar){
  $this->avatar = $avatar;
}
  public function guardarImagen(){
    $mail = $this->mail;
    if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK)
		{

			$nombre=$_FILES["avatar"]["name"];
			$archivo=$_FILES["avatar"]["tmp_name"];

			$ext = pathinfo($nombre, PATHINFO_EXTENSION);

			if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
				return "Error";
			}

			$miArchivo = dirname(__FILE__);
			$miArchivo = $miArchivo . "/img/";
			$miArchivo = $miArchivo . $mail . "." . $ext;

			move_uploaded_file($archivo, $miArchivo);
  }
}
}
?>
