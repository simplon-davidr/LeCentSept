<?php
// session_start();
?>
<!DOCTYPE html>
<html lang"fr_FR">
<head>
  <meta charset="utf-8">

  <title>Le Cent Sept</title>
  <link rel="icon" type="image/png" href="img/fav.png" />
  <link rel="stylesheet" media="screen" href="css/css.css" type="text/css">
  <script src="js/jquery-1.11.3.js"></script>
  <script  type="text/javascript" src="js/base.js"></script>
</head>
<body>
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
          <p >
            Lecentsept est une association qui regroupe Lyon Métropole et des Grands Comptes autour de 5 acteurs de l'innovation sociale : <a href="http://france.ashoka.org/" target="_blank">Ashoka</a>, <a href="http://mouves.org/rhone-alpes/1er-octobre-tour-solutions-sera-lyon/" target="_blank">le Mouves</a>, <a href="#" target="_blank">In Homine</a>, <a href="http://etic.co/" target="_blank">ETIC® – Foncièrement Responsable</a> et <a href="http://www.ronalpia.fr/" target="_blank">Ronalpia</a>.
            Ensemble, nous souhaitons développer des solutions entrepreneuriales sociales et innovantes sur le territoire métropolitain.

            Nous avons pour objectif de devenir un pôle d'excellence français en innovation sociale.
          </p>

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
            <h3>BAROMETRE DES BESOINS</h3>
            <p>
              Détection des besoins sociaux du territoire dans tous les domaines.
            </p>

            <ul class="emploi">
              <h4>Emploi</h4>
              <li>Emploi et insertion.</li>
              <li>Education et jeunesse</li>
            </ul>

            <ul class="cadre">
              <h4>Cadre de vie</h4>
              <li>Consomation</li>
              <li>Environnement</li>
            </ul>

            <ul class="solidarite">
              <h4>Solidarité</h4>
              <li>logement</li>
              <li>Vivre ensemble</li>
              <li>Santé</li>
            </ul>
          </article>
        </div>

        <div class="bloc" id="detection" >
          <img src="img/Ashoka travail.jpg" alt="ashoka" />
          <article>

            <h3>DETECTION ET SELECTION</h3>
            <p>
              Sélection des pépites entrepreneuriales pour résoudre les besoins du territoire.
            </p>
          </article>
        </div>

        <div class="bloc" id="accompagnement">
          <img src="img/lamp-nb.png" alt=lyon"" />
          <article>
            <h3>ACCOMPAGNEMENT</h3>
            <p>
              De l'incubation au changement d'échelle pour maximiser l'impact social des entrepreneurs.
              Parrainage de nos entrepreneurs sociaux et mécénat.
            </p>
          </article>
        </div>

        <div class="bloc" id="selection">
          <img src="img/EC50CC8658.jpg" alt=lyon"" />
          <article >
            <h3>CO-CONSTRUCTION</h3>
            <p>
              Construire avec les pouvoirs publics et les partenaires privés des solutions aux besoins des populations du territoire.
            </p>
          </article >
        </div>

        <div class="bloc" id="promotion">
          <img src="img/lyon-NB.jpg" alt=lyon"" />
          <article>
            <h3>PROMOTION DE L'ENTREPRENEURIAT</h3>
            <p>
              Evénement, mise en réseau, animation de la communauté pour faire vivre notre écosystème.
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
          <h4>Pour le territoire</h4>
          <li>Partir des besoins et des défis du territoire pour y trouver des solutions.</li>
        </ul>

        <div class="porteurs_de_projet">
          <div class="back-projet">  </div>
        </div>

        <ul class="ul_projet">
          <h4>Pour les porteurs de projet</h4>
          <li>Accueillir tous les acteurs porteurs d'une initiative à impact social, sociétal ou environnemental.</li>
          <li>Sélectionner les projets pour maximiser la création de valeur économique sociale et environnementale.</li>
        </ul>

        <div class="le_centsept">
          <div class="back-centsept">  </div>
        </div>

        <ul class="ul_centsept">
          <h4>Pour l'écosystème</h4>
          <li>Cultiver l'échange entre acteurs hétérogènes dans un lieu partagé.</li>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/js.js"></script>
</html>
