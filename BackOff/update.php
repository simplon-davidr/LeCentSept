<?php

if(isset($_POST['submit'])){

    if(isset($_POST["desc"])){

$desc = $_POST["desc"];
$id = NULL;

} else if (isset($_POST["title1"])&&isset($_POST["content1"])){

    $title = $_POST["title1"];
    $content = $_POST["content1"];

}

try{
    $connect = new PDO('mysql:host=localhost; dbname=lecentsept;charset=utf8', 'root', 'root');
} catch ( Exception $e  ){
    die('Erreur : '.$e->getMessage() );
}


if($id != NULL){
    $update_content = 'UPDATE `Content` SET `text`=:text WHERE idTitle=:id';
    $requestDesc = $connect->prepare($update_content);
    $requestDesc->bindParam(':idTitle', $idTitle, PDO::PARAM_INT);
    $requestDesc->bindParam(':text', $content, PDO::PARAM_STR);
    $requestDesc->execute();
    return $requestDesc;
    } else {
        $update_content = 'UPDATE `Content` SET `text`=:text WHERE id=1';
        $requestDesc->bindParam(':text', $desc, PDO::PARAM_STR);
    }

$update_title = 'UPDATE `Title` SET 'content'=:content WHERE id=:id';
$requestTitle = $connect->prepare($update_title);
$requestTitle->bindParam(':content', $desc, PDO::PARAM_STR);
$requestContent->bindParam(':id', $id, PDO::PARAM_INT);

}


?>
