<?php 

## Simple string
$string = 'Hasibul';
$string2 = "Hasan";

## String Concetanation
echo 'Hello '.$string.'! Welcome here!<br>';
echo "Your second name is: $string2";
echo "<br><br>";

## String Function
$example = "    Hello World!    ";

echo strlen($example).'<br>';
echo trim($example).'<br>';
echo ltrim($example).'<br>';
echo rtrim($example).'<br>';
echo strrev($example).'<br>';
echo strtoupper($example).'<br>';
echo strtolower($example).'<br>';

echo strpos("Hello world!", "world").'<br>'; // outputs 6
echo str_replace("world", "Dolly", "Hello world!").'<br>'; // outputs Hello Dolly!

echo crypt('123456','st').'<br>';
echo lcfirst("Hello world!").'<br>';
echo ucfirst("hello world!").'<br>';
echo ucwords("hello world").'<br>';

echo "<br><br>";
$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br>\n");

echo "<br><br>";
$str = "Hello";
echo md5($str);
echo "<br><br>";

## Multiline Text
$longText = " 
    Hello, my name is <b>Hasan</b>
    I am <b>28</b>
    I <b>love</b> my parents
";
echo ($longText).'<br>';
echo nl2br($longText).'<br>';

## Multiline Text and reserved html tags
$longText = " 
    Hello, my name is <b>Hasan</b>
    I am <b>28</b>
    I <b>love</b> my parents
";
echo nl2br(htmlentities($longText)).'<br>';
echo html_entity_decode('&lt;b&gt;Hasan&lt;/b&gt;').'<br>';

/**
 * Refference to see more:
 * https://www.w3schools.com/php/php_ref_string.asp
 */

?>