<?php 

/**
 * Common Primitive Data Types
 */

$name = "Hasibul Hasan Shanto"; // String
$age = 27; // Integer
$salary = 1500.75; // Double
$isMarried = false; // Boolean
$friends = ['Maruf', 'Shamiul', 'Apu']; // Array

### Object
class Car{

}
$car = new Car(); // Object
$null = NULL; // NULL

echo $name.'<br>';
echo $age.'<br>';
echo $salary.'<br>';
echo $isMarried.'<br>';
var_dump( $friends);
echo '<br>';
var_dump( $car); 
echo '<br>';
echo $null;
echo '<br><br>';

### Checking Datatypes
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($salary).'<br>';
echo gettype($isMarried).'<br>';
echo gettype($friends).'<br>';
echo gettype($car).'<br>';
echo gettype($null).'<br>';
echo '<br>';

### Checking Details with Datatypes
var_dump( $name);
echo '<br>';
var_dump( $age);
echo '<br>';
var_dump( $salary);
echo '<br>';
var_dump( $isMarried);
echo '<br>';
var_dump( $friends);
echo '<br>';
print_r( $friends);
echo '<br>';
var_dump( $car);
echo '<br>';
var_dump( $null);

echo '<br><br><br>';

/**
 * Refference to check more :
 * https://www.w3schools.com/php/php_ref_variable_handling.asp
 */
### Checking Datatypes with functions
echo is_string($name).'<br>'; //true
echo is_int($age).'<br>'; //true
echo is_double($salary).'<br>'; //true
echo is_bool($isMarried).'<br>'; //true
echo is_bool($isMarried).'<br>'; //true
echo is_array($friends).'<br>'; //true
echo is_object($friends).'<br>'; //true
echo is_null($friends).'<br>'; //true

echo '<br>';

### isset
echo isset($name).'<br>'; // true
echo  isset($book).'<br>'; // false

?>