<?php session_start();
if (isset($_POST['reset'])) {
  session_destroy();
  header('Location: .');
}

?>

<form class="" method="post">
  <input type="text" name="prenom" value=""><br>
  <input type="submit" name="add" value="Ajouter">
  <input type="submit" name="reset" value="Reset">
</form>


<?php
if(!isset($_SESSION['prenom'])){
  $_SESSION['prenom'] = [];
}
if (isset($_POST['prenom'])){
  $_SESSION['prenom'] = $_SESSION['prenom'].'<br><li>'.$_POST['prenom'].'</li>';
  echo $_SESSION['prenom'];
}

?>
