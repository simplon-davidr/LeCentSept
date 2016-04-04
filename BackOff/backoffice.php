<!DOCTYPE html>
<?php
require 'Class_select.php';

try{
  $connect = new PDO('mysql:host=localhost; dbname=lecentsept; charset=utf8', 'root', 'root');
}
catch ( Exception $e ){
  die('Erreur : '.$e->getMessage());
}

$show = new Select();
?>

<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link type="text/css" rel="stylesheet" href="backoffice.css" />
</head>

<body>
  <div id="info">
    <span>Bienvenue dans la partie "back-office" du site <b>lecentsept.fr</b>, depuis cette page, vous pourrez modifier, en temps réel, toutes les informations relatives à ce dernier.</span>
    <br><span>Pour cela, effectuez directement vos modifications textes puis cliquez sur le bouton "modifier", présent au bas de la page.</span>
    <p>En ce qui concerne la partie <b>description</b>, il est nécessaire de respecter une syntaxe bien précise si vous souhaitez modifier les partenaires ainsi que le lien vers leur site web:
      <li>[[<em>Nom du partenaire</em>::<em>lien vers le site au format http://adresse</em>]]</li>
      <li>Les symboles [[ puis :: puis ]] sont essentiels</li>
      <li>Dans le cas d'un partenaire sans site web, veuillez renseigner # à la place de l'adresse</li>
    </p>
  </div>

  <form action="update.php" method="post">
    <div id="description" class="container">
      <legend>Description :</legend>
      <textarea id="fldDescription" name="desc" type="text" cols="150" rows="5"><?php
      $req = "SELECT * FROM `Content` WHERE id=1";
      $d = $connect->query($req);
      $data = $d->fetch();
      echo $data['text'];
      ?></textarea>

    </div>
    <div id="missions" class="container">
      <legend>Missions :</legend>
      <div class="flex" >
        <!--MISSION 1-->
        <div class="itemMission" id="mission1">
          <div class="flexColumn">
            <input name="title1" class="title" type="text" value="<?php
            $textMission1 = $show->select(0);
            echo $textMission1['title'];
            ?>">
            <input name="text1" type="text" value="<?php
            echo $textMission1['text'];
            ?>">
          </div>
          <div class="flex">
            <!--SOUS MISSION 1-->
            <div class="inblock">
              <input name="title6" class="title" type="text" value="<?php
              $textInMission1 = $show->select(5);
              echo $textInMission1['title'];
              ?>">
              <input name="text6" type="text" value="<?php
              echo $textInMission1['text'];
              ?>">
              <input name="text7" type="text" value="<?php
              $textInMission1b = $show->select(6);
              echo $textInMission1b['text'];
              ?>">
            </div>
            <!--SOUS MISSION 2-->
            <div class="inblock">
              <input name="title7" class="title" type="text" value="<?php
              $textInMission2 = $show->select(7);
              echo $textInMission2['title'];
              ?>">
              <input name="text8" type="text" value="<?php
              echo $textInMission2['text'];
              ?>">
              <input name="text9" type="text" value="<?php
              $textInMission2b = $show->select(8);
              echo $textInMission2b['text'];
              ?>">
            </div>
            <!--SOUS MISSION 3-->
            <div class="inblock">
              <input name="title8" class="title" type="text" value="<?php
              $textInMission3 = $show->select(9);
              echo $textInMission3['title'];
              ?>">
              <input name="text10" type="text" value="<?php
              echo $textInMission3['text'];
              ?>">
              <input name="text11" type="text" value="<?php
              $textInMission3b = $show->select(10);
              echo $textInMission3b['text'];
              ?>">
              <input name="text12" type="text" value="<?php
              $textInMission3c = $show->select(11);
              echo $textInMission3c['text'];
              ?>">
            </div>
          </div>
        </div>
        <!--MISSION 2-->
        <div class="itemMission">
          <input name="title2" class="title" type="text" value="<?php
          $textMission2 = $show->select(1);
          echo $textMission2['title'];
          ?>">
          <textarea name="text2" class="content"><?php
          echo $textMission2['text'];
          ?></textarea>
        </div>
        <!--MISSION 3-->
        <div class="itemMission">
          <input name="title3" class="title" type="text" value="<?php
          $textMission3 = $show->select(2);
          echo $textMission3['title'];
          ?>">
          <textarea name="text3" class="content"><?php
          echo $textMission3['text'];
          ?></textarea>
        </div>
        <!--MISSIONS 4-->
        <div class="itemMission">
          <input name="title4" class="title" type="text" value="<?php
          $textMission4 = $show->select(3);
          echo $textMission4['title'];
          ?>">
          <textarea name="text4" class="content"><?php
          echo $textMission4['text'];
          ?></textarea>
        </div>
        <!--MISSIONS 5-->
        <div class="itemMission">
          <input name="title5" class="title" type="text" value="<?php
          $textMission5 = $show->select(4);
          echo $textMission5['title'];
          ?>">
          <textarea name="text5" class="content"><?php
          echo $textMission5['text'];
          ?></textarea>
        </div>
      </div>
    </div>
    <div id="engagements" class="container">
      <legend>Engagements :</legend>
      <div class="flex">
        <!--ENGAGEMENT 1-->
        <div class="itemEngagement flexColumn">
          <input name="title9" class="title" type="text" value="<?php
          $textEngagement1 = $show->select(12);
          echo $textEngagement1['title'];
          ?>">
          <textarea name="text13" class="content"><?php
          echo $textEngagement1['text'];
          ?></textarea>
        </div>
        <!--ENGAGEMENT 2-->
        <div class="itemEngagement flexColumn">
          <input name="title10" class="title" type="text" value="<?php
          $textEngagement2 = $show->select(13);
          echo $textEngagement2['title'];
          ?>">
          <textarea name="text14" class="content"><?php
          echo $textEngagement2['text'];
          ?></textarea>
          <textarea name="text15" class="content"><?php
          $textEngagement2b = $show->select(14);
          echo $textEngagement2b['text'];
          ?></textarea>
        </div>
        <!--ENGAGEMENT 3-->
        <div class="itemEngagement flexColumn">
          <input name="title11" class="title" type="text" value="<?php
          $textEngagement3 = $show->select(15);
          echo $textEngagement3['title'];
          ?>">
          <textarea name="text16" class="content"><?php
          echo $textEngagement3['text'];
          ?></textarea>
        </div>
      </div>
    </div>
    <input id="submitBtn" type="submit" value="Modifier les informations"/>
  </form>
</body>

</html>
