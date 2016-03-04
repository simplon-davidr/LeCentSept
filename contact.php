<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="contact.css" media="screen" title="no title" charset="utf-8">
  <title></title>
</head>
<body>
<div id="contact_form">


  <?php  if(array_key_exists('errors', $_SESSION)) :?>
  <div class="error_contact">
    <?= implode('<br>', $_SESSION['errors']); ?>
  </div>
<?php endif; ?>
  <?php  if(array_key_exists('success', $_SESSION)) :?>
  <div class="success_contact">
    Votre mail a bien été envoyé
  </div>
<?php endif; ?>

  <form action="post_contact.php" method="post">

    <label for="inputname" >Votre Nom : <em>(*)</em></label>
    <input type="text" name="name" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">

    <label for="inputmail">Votre Mail : <em>(*)</em></label>
    <input type="email" name="email" id="inputmail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">

    <label for="inputsociete" >Votre Société :</label>
    <input type="text" name="societe" id="inputsociete" value="<?= isset($_SESSION['inputs']['societe']) ? $_SESSION['inputs']['societe'] : ''; ?>">

    <label for="inputobjet" >Objet : <em>(*)</em></label>
    <input type="text" name="objet" id="inputobjet" value="<?= isset($_SESSION['inputs']['objet']) ? $_SESSION['inputs']['objet'] : ''; ?>">

    <label for="inputmessage">Votre Message : <em>(*)</em></label>
    <textarea name="message" rows="8" cols="40" id="inputmessage"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>

    <button type="submit" name="button">Envoyer</button>

  </form>

</div>
</body>
</html>

<?php

unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);

 ?>
