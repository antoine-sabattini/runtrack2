<?php session_start(); ?>

<form class="" method="post">
  <input type="submit" name="button" value="Reset du compteur">
</form>

<?php

if (!isset($_COOKIE) || isset($_POST['button'])){
  setcookie('nbvisites', '0');
  header('location: .');
}
if (isset($_COOKIE['nbvisites']) && !isset($_POST['button'])){
  $a = $_COOKIE['nbvisites'];
  $a ++;
  setcookie('nbvisites', $a);
}
echo $_COOKIE['nbvisites'];

//Debug//
//var_dump($_COOKIE['nbvisites']);

?>
