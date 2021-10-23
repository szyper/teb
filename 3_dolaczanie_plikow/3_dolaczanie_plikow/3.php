<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona główna</title>
  </head>
  <body>
    <h3>Strona główna</h3>
    Początek strony<br>
      <?php
        include './new.php';
        include_once './new.php';
        require './new.php';
        require_once './new.php';
        require_once './scripts/text.php';
       ?>
    Koniec strony<br>
  </body>
</html>
