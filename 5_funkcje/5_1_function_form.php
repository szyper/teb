<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Formularz</title>
  </head>
  <body>
    <?php
      if (isset($_SESSION['error'])) {

        echo "<div class=\"red\">".$_SESSION['error']."</div>";
        unset($_SESSION['error']);
      }
     ?>
    <h3>Dane użytkownika</h3>
      <form action="./scripts/script.php" method="post">
        <input type="text" name="name" placeholder="Podaj imię"><br><br>
        <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
        <input type="date" name="birthday"> Data urodzenia <br><br>
        <input type="submit" value="Zatwierdź">
      </form>
  </body>
</html>
