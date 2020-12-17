<?php
	/**
     * Writing Variables in PHP
    */
    $s_name = "Sultan";
    $age = 28;
    $isMale = true;
    $height = 1.85;
    $salary = null;

	$name = "Hasibul Hasan";
	echo $name;
    echo "<br>";
    
	#Integer value
	$age = 26;
	echo "Your Age: ".$age;
	echo "<br>";
	
	# concatanation in PHP by adding .	
	$name = "Hasibul Hasan Shanto"; 
    echo "Welcome to our website, ".$name;
    echo "<br><br>";

    ## Constant Variable Example 1:
    define('PI', 3.1416);
    echo(PI);
    echo "<br>";
// case insensative by adding true
    define('ABC', 'Some text of this variable', true);
    echo(aBc);
    echo "<br><br>";

    ## Constant Variable Example 2:
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    echo LEAVING_MESSAGE;
    echo "<br>";

    ### Php predefined Constants
    echo PHP_INT_MAX.'<br>';
    echo PHP_PREFIX.'<br>';
    echo PHP_OS.'<br>';

    /**
     * Refference to check more :
     * https://www.php.net/manual/en/reserved.constants.php
     */

    
    /**
     * Rules for PHP variables:
     * 
     * A variable starts with the $ sign, followed by the name of the variable
     * A variable name must start with a letter or the underscore character
     * A variable name cannot start with a number
     * A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
     * Variable names are case-sensitive ($age and $AGE are two different variables)
    **/

?>