<?php

class DbMySQL extends Db
{
  private $conexion;

    public function __construct(){
      $dsn="mysql:dbname=proyecto;host=127.0.0.1;port=3306;charset=UTF8";
      $username="root";
      $password="";
      $opt=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

      try {
		  $this->conexion= new PDO($dsn, $username, $password, $opt);
      } catch (PDOException $Exception) {
          echo $Exception->getMessage();
      }
	}
  static public function guardarUsuario($usuario) {
    $query = $db->prepare("Insert into usuarios values(:name, :username,:mail,:pass,:avatar)");
    $query->bindValue(":name", $usuario->getName());
    $query->bindValue(":username", $usuario->getUsername());
    $query->bindValue(":email", $usuario->getMail());
    $query->bindValue(":password", $usuario->getPass());
    $query->bindValue(":avatar", $avatar);
    $id = $this->conexion->lastInsertId();
  	$usuario->setId($id) ;
    $query->execute();
    return $usuario;
  }
  static public function traerTodos() {
    $query = $this->conexion->prepare("Select * from usuarios");
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    return $results;
  }
  
  static public function traerPorMail($email) {
    $query = $this->conexion->prepare("Select * from usuarios where email = :email");
    $query->bindValue(":email", $email);
    $query->execute();
    $mailTraidos = $query->fetchAll(PDO::FETCH_ASSOC);
    return $mailTraidos;
  }
  
}



 ?>
