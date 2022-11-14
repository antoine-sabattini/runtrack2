<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php

$str = "je suis une chaine de caractère";
$int = 42;
$float = 8.6;

  echo'<table>
  <thead>
  <tr>
  <td>Type</td>
  <td>Nom</td>
  <td>Valeur</td>
  </tr>
  </thead>
  <tbody>
  <tr>
  <td>string</td>
  <td>'.$str.'</td>
  <td>il s\'agit d\'une chaine de caractères</td>
  </tr>
  <tr>
  <td>integer</td>
  <td>'.$int.'</td>
  <td>il s\'agit d\'un nombre entier</td>
  </tr>
  <tr>
  <td>float</td>
  <td>'.$float.'</td>
  <td>il s\'agit d\'un nombre avec décimal</td>
  </tr>
  </tbody>
  </table>'
  ?>

  <style media="screen">
  table,
  td {
    border: 1px solid #333;
  }

  thead,
  tfoot {
    color: black;
  }

  </style>
</body>
</html>
