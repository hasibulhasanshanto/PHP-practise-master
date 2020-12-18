<?php

/**
 * In PHP, there are three types of arrays:
 * 
 * Indexed arrays - Arrays with a numeric index 
 * Associative arrays - Arrays with named keys
 * Multidimensional arrays - Arrays containing one or more arrays
**/

## Basic array
$cars = array("Volvo", "BMW", "Toyota");
echo '<pre>';
var_dump($cars);
echo '</pre>';

$fruits = ['Banana', 'Apple', 'Guava', 'Lichi'];
echo '<pre>';
var_dump($fruits);
echo '</pre>';

## Get element by index
echo $cars[0].'<br>';
echo $cars[1].'<br>';
echo $cars[2].'<br>';

## Set element by index
$cars[0] = 'Audi';
echo '<pre>';
var_dump($cars);
echo '</pre>';

## check if array has element at index
isset($cars[3]); // false

## Append element in the array
$cars[] = 'Nissan';
echo '<pre>';
var_dump($cars);
echo '</pre>';

## Print the length of array
echo count($cars).'<br>';

## Add a element in the array
array_push($cars, 'Jaguar');
echo '<pre>';
var_dump($cars);
echo '</pre>';

## Remove a element in the array
array_pop($cars);
echo '<pre>';
var_dump($cars);
echo '</pre>';

## Add a element at the beginning the array
array_unshift($cars,'bar');
echo '<pre>';
var_dump($cars);
echo '</pre>';

## Remove a element at the beginning the array
array_shift($cars);
echo '<pre>';
var_dump($cars);
echo '</pre>';

## Split the string into an array 
$string = "ABC, DEFG, LMNO";
echo '<pre>';
var_dump(explode(',', $string));
echo '</pre>';

## Split the array into an string 
$string2 = ['ABC',' DEFG', 'LMNO', 'XYZ'];
echo implode('||', $string2 ).'<br>';

## check if element in the array
echo '<pre>';
var_dump(in_array('Mango', $cars));
echo '</pre>';

## Search element in the array
echo '<pre>';
var_dump(array_search('BMW', $cars));
echo '</pre>';

## Merge two arrays
$colors = ['Blue', 'Green', 'Yellow'];
$country = ['USA', 'CANADA', 'JAPAN'];
$merge = array_merge($colors, $country);
echo '<pre>';
var_dump($merge);
var_dump(...$colors, ...$country);
echo '</pre>';

?>