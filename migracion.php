<?php
require_once "soporte.php";
$dbsql =  new DbMySQL($pdo);
$dbjson = new DbJson();
$usuarios = $dbjson->traerTodos();
foreach ($usuarios as $usuario)
 {
   try
   {
     $usuarioExtraido = new Usuario($usuario['name'], $usuario['username'], $usuario['email'],$usuario['role'], $usuario['password'], $usuario['id']);
     $dbsql->guardarUsuario($usuarioExtraido);
   } catch (\PDOException $e)
   {
     echo $e->getMessage();
   }


}
