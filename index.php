<?php
// session_start();
require './BackOff/desc_link.php';
//require './BackOff/Class_select.php';
require './BackOff/select.php';
$show = new Select();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

  <title>Le Cent Sept</title>
  <link rel="icon" type="image/png" href="img/fav.png" />
  <link rel="stylesheet" media="screen" href="css/css.css" type="text/css">
  <script src="js/jquery-1.11.3.js"></script>
  <script  type="text/javascript" src="js/base.js"></script>
</head>
<body onload='manageLinks()'>
  <div class="container">
    <div class="btn_menu">
      <img src="img/menu.png" alt="icon menu" />
    </div>

    <div class="menu">
      <nav>
        <img class="btn_del" src="img/delete.png" alt="button delete" />
        <div class="clear"></div>
        <h3>MENU</h3>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#ecosysteme">Ecosystème</a></li>
          <li><a href="#missions">Nos missions</a></li>
          <li><a href="#engagements">Nos engagements</a></li>
          <li><a href="#connaitre">Qui sommes-nous?</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
    <a id="home"></a>
    <section class="header">
      <div class="containerBis">
        <h1><img src="img/107-Q.png" alt="logo 107" /></h1>
        <article class="infos">
          <img src="img/107-3D_COUPE_PERSPECTIVE-black.jpg" id="croquis"/>
          <div id='fldDescription'></div>

        </article>
      </div>
    </section>

    <a id="ecosysteme"></a>
    <section class="ecosysteme">
      <div class="containerBis">
        <div class="title">
          <span><p>super span</p></span>
          <h2>Ecosystème</h2> <span><p>super span</p></span>
        </div>

        <img src="img/schema-107.png" alt="schema107" />
      </div>
    </section>

    <a id="missions"></a>
    <section class="missions">
      <div class="containerBis">
        <div class="title">
          <span><p>super span</p></span>
          <h2>Nos Missions</h2> <span><p>super span</p></span>
        </div>
        <div class="bloc" id="barometre">
          <img src="img/lyon-panorama-NB.jpg" alt=lyon"" />
          <article>
            <h3><?php $content0 = $show->select(0); echo $content0['title']; ?></h3>
            <p>
              <?php $text0 = $show->select(0); echo $text0['text'];  ?>
            </p>

            <ul class="emploi">
              <h4><?php $content1 = $show->select(6); echo $content1['title']; ?></h4>
              <li><?php $text1 = $show->select(5); echo $text1['text'];  ?></li>
              <li><?php $text1bis = $show->select(6); echo $text1bis['text']; ?></li>
            </ul>

            <ul class="cadre">
              <h4><?php $content2 = $show->select(7); echo $content2['title']; ?></h4>
              <li><?php $text2 = $show->select(7); echo $text2['text']; ?></li>
              <li><?php $text2bis = $show->select(8); echo $text2bis['text']  ?></li>
            </ul>

            <ul class="solidarite">
              <h4><?php $content3 = $show->select(9); echo $content3['title']; ?></h4>
              <li><?php $text3 = $show->select(9); echo $text3['text']; ?></li>
              <li><?php $text3bis = $show->select(10); echo $text3bis['text'] ?></li>
              <li><?php $text3bis2 = $show->select(11); echo $text3bis2['text']?></li>
            </ul>
          </article>
        </div>

        <div class="bloc" id="detection" >
          <img src="img/Ashoka travail.jpg" alt="ashoka" />
          <article>

            <h3><?php $content4 = $show->select(1); echo $content4['title']; ?></h3>
            <p>
              <?php $text4 = $show->select(1); echo $text4['text']; ?>
            </p>
          </article>
        </div>

        <div class="bloc" id="accompagnement">
          <img src="img/lamp-nb.png" alt=lyon"" />
          <article>
            <h3><?php $content5 = $show->select(2); echo $content5['title']; ?></h3>
            <p>
              <?php $text5 = $show->select(2); echo $text5['text']; ?>
            </p>
          </article>
        </div>

        <div class="bloc" id="selection">
          <img src="img/EC50CC8658.jpg" alt=lyon"" />
          <article >
            <h3><?php $content6 = $show->select(3); echo $content6['title']; ?></h3>
            <p>
              <?php $text6 = $show->select(3); echo $text6['text']; ?>
            </p>
          </article >
        </div>

        <div class="bloc" id="promotion">
          <img src="img/lyon-NB.jpg" alt=lyon"" />
          <article>
            <h3><?php $content7 = $show->select(4); echo $content7['title']; ?></h3>
            <p>
              <?php $text7 = $show->select(4); echo $text7['text'] ?>
            </p>
          </article >
        </div>

      </div>
    </section>

    <a id="engagements"></a>
    <section class="engagements">
      <div class="containerBis">
        <div class="title">
          <span><p>super span</p></span>
          <h2>Nos Engagements</h2> <span><p>super span</p></span>
        </div>
        <div class="pour_le_territoire">
          <div class="back-territoire">  </div>
        </div>
        <ul class="ul_territoire">
          <h4><?php $content8 = $show->select(12); echo $content8['title']; ?></h4>
          <li><?php $text8 = $show->select(12); echo $text8['text']; ?></li>
        </ul>

        <div class="porteurs_de_projet">
          <div class="back-projet">  </div>
        </div>

        <ul class="ul_projet">
          <h4><?php $content9 = $show->select(13); echo $content9['title']; ?></h4>
          <li><?php $text9 = $show->select(13); echo $text9['text']; ?></li>
          <li><?php $text9bis = $show->select(14); echo $text9bis['text']; ?></li>
        </ul>

        <div class="le_centsept">
          <div class="back-centsept">  </div>
        </div>

        <ul class="ul_centsept">
          <h4><?php $content10 = $show->select(15); echo $content10['title']; ?></h4>
          <li><?php $text10 = $show->select(15); echo $text10['text']; ?></li>
        </ul>

      </div>
    </section>

    <a id="connaitre"></a>
    <section class="connaitre">
      <div class="containerBis">
        <div class="title">
          <span><p>super span</p></span>
          <h2>Qui sommes nous?</h2> <span><p>super span</p></span>
        </div>

        <div class="acteurs"></div>
        <div class="partenaires">
          <h3>Nos Principaux Partenaires</h3>
          <div class="prives"></div>
          <div class="institutionnels"></div>
        </div>

        <!-- <div class="territoire">
        <h3>Ils œuvrent déjà sur le territoire </h3>
      </div> -->
    </div>
  </section>

  <a id="contact"></a>
  <section class="contact">
    <div class="containerBis">
      <div class="title">
        <span><p>super span</p></span>
        <h2>Contact</h2> <span><p>super span</p></span>
      </div>
      <div id="contact-box">
        <div id="contact_form">
          <div id="error_contact">

          </div>
          <form method="post" >

            <label for="inputname" >Votre Nom : <em>(*)</em></label>
            <input type="text" name="name" id="inputname">

            <label for="inputmail">Votre Mail : <em>(*)</em></label>
            <input type="email" name="email" id="inputmail">

            <label for="inputsociete" >Votre Société :</label>
            <input type="text" name="societe" id="inputsociete">

            <label for="inputobjet" >Objet : <em>(*)</em></label>
            <input type="text" name="objet" id="inputobjet">

            <label for="inputmessage">Votre Message : <em>(*)</em></label>
            <textarea name="message" rows="8" cols="40" id="inputmessage"></textarea>

            <button type="button" name="button" class="send">Envoyer</button>
            <em><p>
              Les champs notés d'une * sont obligatoires.
            </p></em>
          </form>
          <div class="map">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.267191569713!2d4.834171651257408!3d45.74578912252797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea481249e651%3A0xd673087c9c1df1bf!2s107+Rue+de+Marseille%2C+69007+Lyon!5e0!3m2!1sen!2sfr!4v1457024753203" width="450" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>


        <?php

        // unset($_SESSION['inputs']);
        // unset($_SESSION['errors']);
        // unset($_SESSION['success']);

        ?>
      </div>

    </section>
  </div>

</body>
<script>
function manageLinks() {
  //descBefore attend la description sortie de la base de données avec les
  //partenaires et liens au format << ___ :: ___ >>
  var descBefore = "<?php echo $data_header['text']; ?>";
  //var finalText = descBefore.value;
  console.log(' 1 : ', descBefore);
  //descAfter correspond à la div/textarea de sortie de la
  //description finale après transformation
  var descAfter = document.getElementById("fldDescription");
  //descAfter.textContent = descBefore ;
  var reg = /\[\[((.*?)\:\:(\S*))\]\]/g;
  var resultReg;
  while ((resultReg = reg.exec(descBefore)) !== null)
  {
    console.log(resultReg[2]+"-"+resultReg[3]);
    var link = '<a style="color:red;text-decoration:none" href="'+resultReg[3]+'">'+resultReg[2]+'</a>';
    descBefore = descBefore.replace(resultReg[0],link);
    }
     console.log(' 2 : ',descBefore);
    descAfter.innerHTML = descBefore;
  }

//  manageLinks();

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/js.js"></script>
</html>
