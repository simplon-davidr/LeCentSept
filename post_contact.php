<?php
// $errors = [];
//
// if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
//   $errors['name'] = "Vous n'avez pas renseigné votre nom.";
// };
// if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
//   $errors['email'] = "Vous n'avez pas renseigné un email valide.";
// };
// if(!array_key_exists('objet', $_POST) || $_POST['objet'] == ''){
//   $errors['objet'] = "Vous n'avez pas renseigné d'objet à votre message.";
// };
// if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
//   $errors['message'] = "Vous n'avez pas renseigné votre message.";
// };
//
// session_start();
//
// if(!empty($errors)){
//   $_SESSION['errors'] = $errors;
//   $_SESSION['inputs'] = $_POST;
//   header("Location: index.php");
// }else{
// $_SESSION["success"] = 1;
// $message = $_POST['message'];
// $mail = $_POST['email'];
// $objet = $_POST['objet'];
// $headers = 'FROM: '.$mail;
// mail('adlin1706@hotmail.com', $objet, $message, $headers);
// header("Location: index.php");
// }
$name=$_POST["name"];
$mail=$_POST["mail"];
$societe=$_POST["societe"];
$objet=$_POST["objet"];
$message=$_POST["message"];
if(!empty($name) && !empty($mail) && filter_var($mail,FILTER_VALIDATE_EMAIL) && !empty($objet) && !empty($message)){
  $headers = 'FROM: '.$mail;
  mail('contact@lecentsept.fr', $objet, $message, $headers);
  echo "Message envoyé";
}
else {
  echo "Erreur";
}
?>
