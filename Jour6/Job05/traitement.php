<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.cdnfonts.com/css/riffle" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/concielian-break" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/calliretta-personal-use" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/eurocorp" rel="stylesheet">
  <?php
  //1/vérification de la condition /2/ chargé la bonne feuille de styles
  if ($_GET['list'] === "style1") {
    echo '<link rel="stylesheet" href="style1.css">';
  }
  elseif ($_GET['list'] === "style2") {
    echo '<link rel="stylesheet" href="style2.css">';
  }
  elseif ($_GET['list'] === "style3") {
    echo '<link rel="stylesheet" href="style3.css">';
  }

  //debug
  //var_dump($_GET);

  ?>
  
  <title>Choose your style</title>
</head>
<body>

  <?php
    echo '<p clas="infos">Nom : '.$_GET['nom'].'<br></p>';
    echo '<p clas="infos">Prénom : '.$_GET['prenom'].'<br></p>';
    echo '<p clas="infos">age : '.$_GET['age'].'<br></p>';
  ?>
</body>
</html>
