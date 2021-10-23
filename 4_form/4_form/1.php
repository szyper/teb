<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <form method="get">
      <input type="text" name="name" placeholder="Podaj imię (max. 10 znaków)"><br><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
      <input type="radio" name="gender" value="m" checked>mężczyzna
      <input type="radio" name="gender" value="w">kobieta<br><br>
      <select name="nationality">
        <option value="polska">Polska</option>
        <option value="ukraińska">Ukraińska</option>
        <option value="usa">USA</option>
      </select> Narodowość<br><br>
      <input type="color" name="color"> Ulubiony kolor <br><br>
      <input type="submit" name="button" value="Zatwierdź"><hr>
    </form>

    <?php
    if (isset($_GET['button'])) {
      if (!empty($_GET['name']) && !empty($_GET['surname']) && !empty($_GET['gender']) && !empty($_GET['nationality']) && !empty($_GET['color'])) {
        $name = trim($_GET['name']);
        $name = substr(ucfirst(strtolower($name)), 0, 10);
        $surname = trim($_GET['surname']);
        $surname = substr(ucfirst(strtolower($surname)), 0, 15);
        switch ($_GET['gender']) {
          case 'm':
            $gender='mężczyzna';
            break;
          case 'w':
            $gender='kobieta';
            break;
        }
        // echo strlen($name);
        echo <<< DATA
          Twoje imię i nazwisko: $name $surname<br>
          Płeć: $gender<br>
          Narodowość: $_GET[nationality]<br>
          Ulubiony kolor: $_GET[color]
DATA;
}else{
  echo "Wypełnij dane!";
}
    }
     ?>
  </body>
</html>
