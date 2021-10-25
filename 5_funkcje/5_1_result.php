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
      echo "<h3>Dane pobrane z formularza</h3>";
      foreach ($_SESSION['data'] as $key => $value) {
        echo "$key: $value, długość: ".strlen($value)."<br>";
      }
      echo "<hr><h3>Poprawione dane:</h3>";
      require_once './functions/function.php';
      // echo show();
      // echo validateData($_SESSION['data']['name'], 5).", długość: ".strlen(validateData(utf8_decode($_SESSION['data']['name']), 5))."<br>";

      foreach ($_SESSION['data'] as $key => $value) {
        if ($key=='birthday') {
          echo "$key: $value<br>";
        }else{
          echo "$key: ".validateData($value, 5)."<br>";
        }
      }
     ?>
  </body>
</html>
