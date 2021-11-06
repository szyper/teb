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
            <td><a href="./5_db_select_table_delete_insert_update.php?updateId=$row[user_id]">Aktualizuj</a></td>
          <tr>
USER;
      }
      echo '</table>';

// dodawanie użytkownika
      if (isset($_GET['addUser'])) {
        if (isset($_SESSION['error'])) {
          echo $_SESSION['error'];
          unset($_SESSION['error']);
        }
        echo <<< FORMADDUSER
          <hr>
          <h4>Dodawanie użytkownika</h4>
          <form action="./scripts/insert.php" method="post">
            <input type="text" name="name" placeholder="Podaj imię"><br><br>
            <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
            <select name="city_id">
FORMADDUSER;
              $sql="SELECT * FROM `cities` ";
              $result=$connect->query($sql);
              while ($city=$result->fetch_assoc()) {
                echo <<< CITY
                  <option value="$city[city_id]">$city[city]</option>
CITY;
              }
        echo <<< FORMADDUSER
            </select><br><br>
            <input type="date" name="birthday"> Data urodzenia<br><br>
            <input type="submit" value="Dodaj użytkownika">
          </form>
FORMADDUSER;
      }else {
        echo '<hr><a href="./5_db_select_table_delete_insert_update.php?addUser=">Dodaj użytkownika</a>';
      }

// aktualizacja użytkownika
if (isset($_GET['updateId'])) {
  if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
  }

$sql = "SELECT * FROM `users` WHERE `user_id`=$_GET[updateId];";
$result = $connect->query($sql);
$userUpdate = $result->fetch_assoc();

  echo <<< FORMADDUSER
    <hr>
    <h4>Aktualizacja użytkownika</h4>
    <form action="./scripts/update.php" method="post">
      <input type="hidden" name="user_id" value="$userUpdate[user_id]"><br><br>
      <input type="text" name="name" value="$userUpdate[name]"><br><br>
      <input type="text" name="surname" value="$userUpdate[surname]"><br><br>
      <select name="city_id">
FORMADDUSER;
        $sql="SELECT * FROM `cities` ";
        $result=$connect->query($sql);
        while ($city=$result->fetch_assoc()) {
          if ($userUpdate['city_id'] == $city['city_id']) {
            echo <<< CITY
              <option value="$city[city_id]" selected>$city[city]</option>
CITY;
          }else{
            echo <<< CITY
              <option value="$city[city_id]">$city[city]</option>
CITY;
}

        }
  echo <<< FORMADDUSER
      </select><br><br>
      <input type="date" name="birthday" value="$userUpdate[birthday]"> Data urodzenia<br><br>
      <input type="submit" value="Aktualizacja użytkownika">
    </form>
FORMADDUSER;
}
     ?>

  </body>
</html>
