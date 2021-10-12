<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona główna</title>
  </head>
  <body>
    <p>Strona główna kurs</p>
    <?php
      $name='Janusz';
      $surname="Nowak";
      echo 'Imię: $name<br>'; //Imię: $name
      echo "Imię: $name<hr>"; //Imię: Janusz
      // echo "Imię i nazwisko: $name $surname<br>Kurs programowania<br>";

// heredoc
  echo <<< LABEL
    Imię i nazwisko: $name $surname<br>
    Kurs programowania
    <br>
LABEL;

  $text = <<< LABEL
    <hr>
    Opcja II <br>
    Imię i nazwisko: $name $surname<br>
    Kurs programowania
    <br>
LABEL;

echo $text;

// składnia nowdoc
echo <<< 'LABEL'
  <br>
  Imię i nazwisko: $name $surname<br>
  Kurs programowania
  <br>
LABEL;


     ?>
  </body>
</html>
