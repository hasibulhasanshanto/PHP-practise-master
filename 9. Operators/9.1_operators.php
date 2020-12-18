<?php 
	/**
     * Operators in PHP
     */
    
	$a = 10;
	$b = 3;

	#Basic Arithmatic operation 
	echo "Sum of a+b : ", $a+$b ."<br>";
	echo "Subtraction of a-b : ", $a-$b ."<br>";
	echo "Multfication of a*b : ", $a*$b ."<br>";
	echo "Division of a/b : ", $a/$b ."<br>";

	echo ($a*$b) ** 2;
	echo "<br>";


	//Modulus Operator
	echo "Modulus of a%b : ", $a%$b ."<br>";
	//Usually works as Power
	echo "Exponent of a**b : ", $a**$b ."<br>";

	//Increment/Decrement Operator

	$x = 10;
	$y = 5;

	echo $x++ ."<br>";
	echo $x++ ."<br>";

	echo $y-- ."<br>";
	echo $y-- ."<br>";


	/*
	x = y     x= y     x= y
	+=        x+=y 		x = x+y
	-=		  x -=y 	x = x-y
	*=		  x*=y 		x= x*y
	/= 		  x/=y 		x = x/y
	%= 		  x%=y  	x = x%y
	**= 	  x**=y 	x = x**y

	<=> spaceship operator greater than or equal or less than

	*/
?>