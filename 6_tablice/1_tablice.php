<?php
// tablica indeksowana
  $person1 = array('Janusz', 'Nowak', 20, 10 => 5, 1 => "Kowalski");
  print_r($person1);
  echo '<hr>';

// tablica asocjacyjna
  $car = array (
    'brand' => 'Ferrari',
    'model' => 'F430',
    'length' => 200,
    'price' => 1500000.5,
  );
  echo "<pre>";
    print_r($car);
  echo "<pre>";

// typy danych
  echo gettype($car['brand']); //string
  echo gettype($car['length']); //integer
  echo gettype($car['price']),'<hr>'; //double

// tablica wielowymiarowa
  $person = array(
    array("Jan", "Nowak", 173),
    array("Anna", "Kowalska", 160),
    array("Katarzyna", "Kowalska")
  );

  // print_r($person);

  foreach ($person as $key => $value) {
    $count=$key+1;
    echo "Tablica ".$count."<br>";
    echo <<<PERSON
      Imię: $value[0], nazwisko: $value[1]
PERSON;
  if (isset($value[2])) {
    echo ", wzrost: ".$value[2]."cm";
  }
  echo "<br>";
  }
  echo "<br>Ilość elementów tablicy: ".count($person);
 ?>
