<?php
    /**
     * PHP Conditions
     */

    ## Simple if
    $x = 20;
    if($x == 20){
        echo 'Yes! it Matched <br>';
    }

    ## Simple if
    $y = 30;
    if($y == 20){
        echo 'Yes! it Matched <br>';
    }else{
        echo 'Yes! it don\'t Matched <br>';
    }
    ## Differnce between == and === 
    // check the value, if value matched return true
    if($x == 20){
        echo '1 <br>';
    }
    if($x == '20'){
        echo '2 <br>';
    }

    // check the value and datatypes too, if value matched return true
    if($x === '20'){
        echo 'True <br>';
    }else{
        echo 'False <br>';
    }

    ## if AND
    if($x == 20 AND $y==30){
        echo 'Do something <br>';
    }

    ## if OR
    if($x == 20 OR $y == 1000){
        echo 'Do or Die <br>';
    }

    ## Ternary if
    echo $x < 20 ? 'Young' : 'Old';
    echo '<br>';

    ## Ternary if in shorter way
    $myVal = $x ?: '50';

    echo '<pre>';
    var_dump($myVal);
    echo '</pre>';

    ## Null coalescing operator
    echo $myName = isset($name) ? $name : 'John';
    echo '<br>';
    // In shorter way
    echo $herName = $name ?? 'Angel';
     echo '<br><br><br>';


    ## CGPA CALCULATOR
    $marks = 75;

	if ($marks >=80 && $marks <=100) {
		echo "You have got A+ <br>";

	} elseif($marks >=70 && $marks <80) {
		echo "You have got A <br>";

	} elseif($marks >=60 && $marks <70) {
		echo "You have got A- <br>";

	} elseif($marks >=50 && $marks <60) {
		echo "You have got B <br>";

	} elseif($marks >=40 && $marks <50) {
		echo "You have got C <br>";

	} elseif($marks >=33 && $marks <40) {
		echo "You have got D <br>";
		
	} else{
		echo "You Failed :(<br>";
	}


?>