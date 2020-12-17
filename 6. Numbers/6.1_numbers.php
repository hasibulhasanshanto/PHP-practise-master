<?php
// Cast float to int
$cc = 23465.768;
$int_cast = (int)$cc;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";

$x = 5985;
var_dump(is_numeric($x));
echo "<br>";

$y = 5985;
var_dump(is_int($y));
echo "<br>";

$z = 59.85;
var_dump(is_int($z));
echo "<br>";

$m = 1.9e411;
var_dump($m);
echo "<br>";

$n = acos(8);
var_dump($n);
echo "<br>";

$o = "59.85" + 100;
var_dump(is_numeric($o));
echo "<br>"; 

$p = "Hello";
var_dump(is_numeric($p));
echo "<br>";

?>