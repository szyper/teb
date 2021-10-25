<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ilość kolorów</title>
  </head>
  <body>
    <h4>Podaj ilość ulubionych kolorów</h4>
    <form method="post">
      <input type="number" name="countColor" placeholder="Ile masz ulubionych kolorów"><br><br>
      <input type="submit" value="Zatwierdź">
    </form>
    <?php
      if (!empty($_POST['countColor'])) {
        echo "<hr><h4>Wpisz ulubione kolory</h4>";
        echo "<form action=\"./script.php\" method=\"POST\">";
        for ($i=0; $i < $_POST['countColor']; $i++) {
          $count=$i+1;
          echo "<input type=\"text\" name=\"color$count\" placeholder=\"Ulubiony kolor $count\"><br><br>";
        }
        echo '<input type="submit" value="Zatwierdź">';
        echo "</form>";
      }
     ?>
  </body>
</html>
