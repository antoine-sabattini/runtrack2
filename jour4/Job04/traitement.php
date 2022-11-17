<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php

  echo '<table>
  <thead>
  <tr>
  <th>Arguments</th><th>Valeur</th>
  </tr>
  </thead>';
  foreach($_POST as $variable => $value) {
    echo '<tr>
    <td>'.$variable.'</td><td>'.$value.'</td>
    </tr>';
  }

  ?>

  <style media="screen">
  table,td {
    border: 1px solid #333;
  }

  thead,
  tfoot {
    background-color: #333;
    color: #fff;
  }
</style>
</body>
</html>
