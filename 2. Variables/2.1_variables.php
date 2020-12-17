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