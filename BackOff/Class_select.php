<?php

class Select {

  //private $id;
  // private $title;
  // private $text;

  // public function __construct($id){
  //     $this->id = $id;
  //     // $this->title = $title;
  //     // $this->text = $text;
  // }

  public function __construct(){

  }

  public function select($id){
    try{
        $connect = new PDO('mysql:host=localhost; dbname=lecentsept; charset=utf8', 'root', 'root');
    } catch ( Exception $e ){
        die('Erreur : '.$e->getMessage());
    }

    $title = "SELECT * FROM `Title` INNER JOIN `Content` ON Title.id = Content.idTitle";
    $request = $connect->prepare($title);
    $request->execute();
    $data = $request->fetchAll(PDO::FETCH_ASSOC);
    // return $this->id.' '.$data;
    return $data[$id];
    //return $data;
  }
 }




?>
