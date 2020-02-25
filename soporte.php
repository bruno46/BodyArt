<?php
include_once 'pdo.php';
include_once 'clases/Validador.php';
include_once 'clases/Auth.php';
include_once 'clases/Usuario.php';
include_once 'clases/Db.php';
include_once 'clases/DbJson.php';
include_once 'clases/DbMySQL.php';


$dbType = "mysql";

switch ($dbType) {
  case 'mysql':
    $db = new DbMySQL($pdo);
    break;

  case 'json':
    $db = new DbJson();
    break;
}
$auth = new Auth($db);
$validador = new Validador($db);
