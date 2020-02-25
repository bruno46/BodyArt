<?php

class Usuario
{
private $id;
private $name;
private $username;
private $mail;
private $pass;


public function __construct($id=null,$name,$username,$mail,$pass/*,$cpass=null*/){
 
  $this->name = $name;
  $this->username = $username;
  $this->mail = $mail;
  if ($id==null) {
    $this->pass = password_hash($pass, PASSWORD_DEFAULT);
  }else
  $this->pass = $pass;
  //$this->cpass = $cpass;
  
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
public function getUsername(){
  return $this->username;
}
public function setUsername($username){
  $this->username = $username;
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
/*public function getCpass(){
  return $this->cpass;
}
public function setCpass($pass){
  $this->cpass = $cpass;
}*/


  public function guardarImagen(){
    $mail = $this->mail;
    $errores = [];
    if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK)
		{

			$nombre=$_FILES["avatar"]["name"];
			$archivo=$_FILES["avatar"]["tmp_name"];

			$ext = pathinfo($nombre, PATHINFO_EXTENSION);

			if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
        $errores["avatar"] = "Solo acepto formatos jpg y png";
        return $errores;
			}

			$miArchivo = dirname(__DIR__);
      $miArchivo = $miArchivo . "../perfil/";
			$miArchivo = $miArchivo . $mail . "." . $ext;

			move_uploaded_file($archivo, $miArchivo);
  }else {

    $errores["avatar"] = "Hubo un error al procesar el archivo";

}

return $errores;
}
}


