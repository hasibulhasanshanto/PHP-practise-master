<?php 

## Sorting ASC
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
echo '<pre>';
var_dump($cars);
echo '</pre>'; 

$numbers = [4, 6, 2, 22, 11];
sort($numbers);
var_dump($numbers);

## Sorting DESC
rsort($cars);
echo '<pre>';
var_dump($cars);
echo '</pre>'; 

## Sorting according value
$age = ["Peter"=>"35", "Ben"=>"53", "Joe"=>"43"];
asort($age);
echo '<pre>';
var_dump($age);
echo '</pre>'; 
## Reverse Sorting according value
$age = ["Peter"=>"35", "Ben"=>"53", "Joe"=>"43"];
arsort($age);
echo '<pre>';
var_dump($age);
echo '</pre>'; 

## Sorting according key
$age = ["Peter"=>"35", "Ben"=>"53", "Alif"=>"43"];
ksort($age);
echo '<pre>';
var_dump($age);
echo '</pre>'; 
## Reverse Sorting according key
$age = ["Peter"=>"35", "Ben"=>"53", "Alif"=>"43"];
krsort($age);
echo '<pre>';
var_dump($age);
echo '</pre>'; 

?>