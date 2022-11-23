<form class="" action="reset.php" method="get">
  <input type="submit" name="destroy_sess" value="Reset du compteur">
</form>

<?php
session_start();

if (isset($_SESSION['nbvisites'])) {
  $_SESSION['nbvisites']++;
}
else {
  $_SESSION['nbvisites'] = 0;
}
echo 'nombre de visites : '.$_SESSION['nbvisites'];

//debug
//var_dump($_SESSION['nbvisites']);

 ?>
