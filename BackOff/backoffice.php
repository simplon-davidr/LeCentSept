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
    </div>


    <div id="description" class="container">
    <form action='update.php' method='POST'>
        <legend>Description :</legend>
        <textarea id="fldDescription" name="desc" type="text" cols="150" rows="5"><?php
                $req = "SELECT * FROM `Content` WHERE id=1";
                $d = $connect->query($req);
                $data = $d->fetch();
                echo $data['text'];
            ?>
        </textarea>
    <input type='submit' name='submit'>
    </form>

    </div>
    <div id="missions" class="container">
        <legend>Missions :</legend>
        <div class="flex" >
            <div class="itemMission" id="mission1">
                <div class="flexColumn">
                    <input class="title" type="text" value="<?php
                        $textMission1 = $show->select(0);
                        echo $textMission1['content'];
                    ?>">
                    <input type="text" value="<?php
                        echo $textMission1['text'];
                    ?>">
                </div>
                <div class="flex">
                    <div class="inblock">
                        <input class="title" type="text" value="<?php
                            $textInMission1 = $show->select(5);
                            echo $textInMission1['content'];
                        ?>">
                        <input type="text" value="<?php
                            echo $textInMission1['text'];
                        ?>">
                        <input type="text" value="<?php
                            $textInMission1b = $show->select(6);
                            echo $textInMission1b['text'];
                        ?>">
                    </div>
                    <div class="inblock">
                        <input class="title" type="text" value="<?php
                            $textInMission2 = $show->select(7);
                            echo $textInMission2['content'];
                        ?>">
                        <input type="text" value="<?php
                            echo $textInMission2['text'];
                        ?>">
                        <input type="text" value="<?php
                            $textInMission2b = $show->select(8);
                            echo $textInMission2b['text'];
                        ?>">
                    </div>
                    <div class="inblock">
                        <input class="title" type="text" value="<?php
                            $textInMission3 = $show->select(9);
                            echo $textInMission3['content'];
                        ?>">
                        <input type="text" value="<?php
                            echo $textInMission3['text'];
                        ?>">
                        <input type="text" value="<?php
                            $textInMission3b = $show->select(10);
                            echo $textInMission3b['text'];
                        ?>">
                        <input type="text" value="<?php
                            $textInMission3c = $show->select(11);
                            echo $textInMission3c['text'];
                        ?>">
                    </div>
                </div>
            </div>
            <div class="itemMission">
                <input class="title" type="text" value="<?php
                            $textMission2 = $show->select(1);
                            echo $textMission2['content'];
                        ?>">
                <textarea class="content"><?php
                            echo $textMission2['text'];
                        ?></textarea>
            </div>
            <div class="itemMission">
                <input class="title" type="text" value="<?php
                            $textMission3 = $show->select(2);
                            echo $textMission3['content'];
                        ?>">
                <textarea class="content"><?php
                            echo $textMission3['text'];
                        ?></textarea>
            </div>
            <div class="itemMission">
                <input class="title" type="text" value="<?php
                            $textMission4 = $show->select(3);
                            echo $textMission4['content'];
                        ?>">
                <textarea class="content"><?php
                            echo $textMission4['text'];
                        ?></textarea>
            </div>
            <div class="itemMission">
                <input class="title" type="text" value="<?php
                            $textMission5 = $show->select(4);
                            echo $textMission5['content'];
                        ?>">
                <textarea class="content"><?php
                            echo $textMission5['text'];
                        ?></textarea>
            </div>
        </div>
    </div>
    <div id="engagements" class="container">
        <legend>Engagements :</legend>
        <div class="flex">
            <div class="itemEngagement flexColumn">
                <img src="" alt="">
                <input class="title" type="text" value="<?php
                            $textEngagement1 = $show->select(12);
                            echo $textEngagement1['content'];
                        ?>">
                <textarea class="content"><?php
                            echo $textEngagement1['text'];
                        ?></textarea>
            </div>
            <div class="itemEngagement flexColumn">
                <img src="" alt="">
                <input class="title" type="text" value="<?php
                            $textEngagement2 = $show->select(13);
                            echo $textEngagement2['content'];
                        ?>">
                <textarea class="content"><?php
                            echo $textEngagement2['text'];
                        ?></textarea>
                <textarea class="content"><?php
                            $textEngagement2b = $show->select(14);
                            echo $textEngagement2b['text'];
                        ?></textarea>
            </div>
            <div class="itemEngagement flexColumn">
                <img src="" alt="">
                <input class="title" type="text" value="<?php
                            $textEngagement3 = $show->select(15);
                            echo $textEngagement3['content'];
                        ?>">
                <textarea class="content"><?php
                            echo $textEngagement3['text'];
                        ?></textarea>
            </div>
        </div>
    </div>
    <button type="submit">Modifier les informations</button>
</body>

</html>
