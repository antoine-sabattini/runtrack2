<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Formulaire</title>
  <link rel="stylesheet" href="">
  <link href="https://fonts.cdnfonts.com/css/riffle" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/concielian-break" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/calliretta-personal-use" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/eurocorp" rel="stylesheet">
</head>
<body>
  <form class="form" action="traitement.php" method="get">
    <label for="">Nom</label><br>
    <input type="text" name="nom" value=""><br>
    <label for="">Prénom</label><br>
    <input type="text" name="prenom" value=""><br>
    <label for="">Age</label><br>
    <input type="text" name="age" value=""><br>
    <label for="style-select">Style</label><br>
    <select name="list" id="style-select">
      <option value="">--Please choose an option--</option>
      <option value="style1" name="style1">Style 1</option>
      <option value="style2" name="style2">Style 2</option>
      <option value="style3" name="style3">Style 3</option>
    </select><br>
    <input class="btn" type="submit" name="" value="Envoyer">
  </form>
</body>
</html>
