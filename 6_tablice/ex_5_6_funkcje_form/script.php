<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ulubione kolory</title>
  </head>
  <body>
    <h4>Ulubione kolory</h4>
    <?php
      // print_r($_POST);
      $colors=[];
      foreach ($_POST as $value) {
        array_push($colors, $value);
      }
      // print_r($colors);

      $colorsFavorite=array_map(fn($color) => strtolower($color), $colors);
      sort($colorsFavorite);
      print_r($colorsFavorite);

      echo "<br>Ilość lubionych kolorów: ".count($colorsFavorite)."<br>";
      


     ?>
  </body>
</html>
