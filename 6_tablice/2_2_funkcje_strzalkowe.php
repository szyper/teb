<h4>Funkcje strzałkowe</h4>
<?php

  function cube($n)
{
    return ($n * $n);
}

$age=[1, 2, 3];
$b = array_map('cube', $age);
print_r($b);
echo '<br>';

##################################################

function validateName($name){
  return ucfirst(strtolower(trim($name)));
}

$names=["januSZ", "AgnIEszKA", "miCHał"];
$validateNames=array_map('validateName', $names);
print_r($names);
echo '<br>';
print_r($validateNames);
echo '<br>';

###################################################

$salary=[3500, 7700, 2800, 12000, 10000];
$salaryIncrease=array_map(function($salary){
  return $salary*1.15;
}, $salary);
print_r($salary);
echo '<br>';
print_r($salaryIncrease);
echo '<br>';

###################################################

$salary=[3500, 7700, 2800, 12000, 10000];
$salaryIncrease=array_map(fn($salary)=>$salary*1.15, $salary);
print_r($salary);
echo '<br>';
print_r($salaryIncrease);
echo '<br>';

###################################################

$salary=[3500, 7700.95, 2800, 12000, 10000];
$salaryIncrease=array_map(fn($salary):float=>$salary*1.15, $salary);
print_r($salary);
echo '<br>';
print_r($salaryIncrease);

 ?>
