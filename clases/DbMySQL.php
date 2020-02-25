<?php

class DbMySQL extends Db
{
  private $db;

  public function __construct($db)
{
  $this->db=$db;
}
public function getDb()
{
  return $this->db;
}

public function setDb($db)
{
$this->db = $db;
}
	
  public function guardarUsuario(Usuario $usuario) {
    $db=$this->db;
    
    $query = $db->prepare("INSERT INTO usuarios(id,nombre,username,email,password) VALUES(default,:name, :username,:mail,:pass)");
    $query->bindValue(":name", $usuario->getName(), PDO::PARAM_STR);
    $query->bindValue(":username", $usuario->getUsername(), PDO::PARAM_STR);
    $query->bindValue(":mail", $usuario->getMail(), PDO::PARAM_STR);
    $query->bindValue(":pass", $usuario->getPass(), PDO::PARAM_STR);
  
    try{
    $query->execute(); 
  }catch (Exception $e) {
    echo "La conexion a la base de datos falló: " . print_r($e->getMessage());}
    $id = $db->lastInsertId();
    $usuario->setId($id);
    return $usuario;
  }
  public function traerTodos() {
    $db=$this->db;
    $query = $db->prepare("Select * from usuarios");
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    return $results;
  }
  
 public function traerPorMail($mail) {
    $db=$this->db;
    $query = $db->prepare("Select * from usuarios where email = :mail");
    $query->bindValue(":mail",$mail,PDO::PARAM_STR);
    $query->execute();
    $mailTraidos = $query->fetchAll(PDO::FETCH_ASSOC);
    return $mailTraidos;
  }
  
} 