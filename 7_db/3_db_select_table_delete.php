<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      require_once './scripts/connect.php';
      $sql = "SELECT * FROM `users` INNER JOIN `cities` ON users.city_id=cities.city_id; ";
      $result = $connect->query($sql);

      if (isset($_SESSION['error']['info'])) {
        echo $_SESSION['error']['info']."<hr>";
        unset($_SESSION['error']);
      }elseif (isset($_SESSION['error']['count'])) {
        echo "Usunięto ".$_SESSION['error']['count']['person']." użytkownika o id=".$_SESSION['error']['count']['id']."<hr>";
        unset($_SESSION['error']);
      }

      echo <<< TABLE
        <table>
          <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Miasto</th>
            <th>Data urodzenia</th>
          </tr>
TABLE;

      while ($row = $result->fetch_assoc()) {
        echo <<< USER
          <tr>
            <td>$row[user_id]</td>
            <td>$row[name]</td>
            <td>$row[surname]</td>
            <td>$row[city]</td>
            <td>$row[birthday]</td>
            <td><a href="./scripts/delete.php?deleteId=$row[user_id]">Usuń</a></td>
          <tr>
USER;
      }
      echo "</table>";
     ?>

  </body>
</html>
