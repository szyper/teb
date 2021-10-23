<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane z formularza</title>
  </head>
  <body>
    <?php
      // print_r($_SESSION['data']);
      foreach ($_SESSION['data'] as $key => $value) {
        echo "$key: $value<br>";
      }
     ?>
  </body>
</html>
