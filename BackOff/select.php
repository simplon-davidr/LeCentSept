<?php
try{
        $connect = new PDO('mysql:host=localhost; dbname=lecentsept; charset=utf8', 'root', 'root');

} catch ( Exception $e  ){
        die('Erreur : '.$e->getMessage());

}

    $title = "SELECT * FROM `Content` WHERE id=1";
    $request = $connect->prepare($title);
    $request->execute();
    $intro = $request->fetch(PDO::FETCH_ASSOC);
    // return $this->id.' '.$data;

?>
