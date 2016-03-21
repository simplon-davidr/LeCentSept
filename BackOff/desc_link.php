<?php
require 'Class_select.php';
try{
  $connect = new PDO('mysql:host=localhost; dbname=lecentsept; charset=utf8', 'root', 'root');
}
catch ( Exception $e ){
  die('Erreur : '.$e->getMessage());
}

$show = new Select();
$req = "SELECT * FROM `Content` WHERE id=1";
$d = $connect->query($req);
$data_header = $d->fetch();
?>
