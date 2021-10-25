<?php
  function childName(){
    return 'Franek';
  }

  print_r(childName());
  echo '<br>';
  var_dump(childName());
  echo '<br>';
  $childs = [
    ['id' => '1', 'name' => 'Franek'],
    ['id' => '2', 'name' => 'Jagoda'],
  ];

  $validateChildNames = array_map(function($child){
    // return $child;
    return $child['name'];
  }, $childs);

  echo "<pre>";
    print_r($validateChildNames);
  echo "</pre><hr>";

  ##############################################

  $name = function (){
    return 'Franek';
  };

  var_dump($name());

  ##############################################

  $name = fn () => 'Franek';
  var_dump($name());

  ##############################################

  $multi = fn ($a, $b) => $a * $b;
  var_dump($multi(4, 5));
  echo '<br>';
  var_dump($multi(4.5, 5));
  echo '<br>';

  ##############################################

  $fruits = [
    ['name' => 'apple', 'price' => 6],
    ['name' => 'lemon', 'price' => 10.5]
  ];

  $sale = array_map(function($fruit){
    return $fruit['name'];
  }, $fruits);

  print_r($sale);
    echo '<br>';

  ##############################################

  $fruits = [
    ['name' => 'apple', 'price' => 6],
    ['name' => 'lemon', 'price' => 10.5]
  ];

  $sale = array_map(fn($fruit) => $fruit['name'], $fruits);

  print_r($sale);
  echo '<br>';

##############################################

  $name='adam';
  $split=str_split($name);

  $result=array_map(function($char){
    return ['char' => $char];
  }, array_unique($split));

  // var_dump($split);
  echo'<pre>';
  print_r($result);
  echo'</pre>';

##############################################

  $name='adam';
  $split=str_split($name);

  $result=array_map(function($char, $count){
    return [
      'char' => $char,
      'occurs' => $count
    ];
  }, array_unique($split), array_count_values($split));

  echo'<pre>';
  print_r($result);
  echo'</pre>';

##############################################

  $name='adam';
  $split=str_split($name);

  $result=array_map(fn($char, $count) => [
      'char' => $char,
      'occurs' => $count
    ], array_unique($split), array_count_values($split));

  echo'<pre>';
  print_r($result);
  echo'</pre>';

##############################################

// $user=null;
$user = ['name' => 'Franek'];

$result = function() use ($user){
  if (!$user) {
    return 'brak danych!';
  }

  return 'Witaj '.$user['name'].'!';
};

print_r($result());
echo '<br>';

##############################################

$user=' ';
$user=trim($user);
// $user = ['name' => 'Franek'];

$result = fn() => $user ? 'Witaj '.$user['name'] : 'brak danych!';

print_r($result());

 ?>
