<?php
$dsn = 'mysql:host=localhost;dbname=proyecto;charset=utf8mb4;port=3306';

$user ="root";
$pass ="";
$opt =[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
  $pdo = new PDO($dsn,$user,$pass,$opt);
} catch (Exception $e) {
  echo "La conexion a la base de datos falló: " . $e->getMessage();
}
