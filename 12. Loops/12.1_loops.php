<?php 

/**
 * While Loops
 */
	$i = 1;
	while ( $i <= 10) {
		echo $i. ") Hello world! <br>";
		//$i = $i +1;
		$i++;
	}
	echo "<br><br>";
	$a = 10;
	while ( $a >= 1) {
		echo $a. ") Hello a! <br>";
		//$i = $i +1;
		$a--;
	}

	### Do while loop
	echo "<br><br>";
	$b = 1;
	do {
		echo $b. ". Yahoo! <br>";
		$b++;
	} while ( $b<= 10);

	echo "<br><br>";

	$z = 10;
	do {
		echo $z. ". Yahoo! <br>";
		$z--;
    } while ( $z>= 1);
    
    /**
     * For Loop
     */
    echo "<br><br>";
    for ($i=1; $i <= 10; $i++) { 
		echo $i.". Hello Shanto ! <br>";	
	}

	echo "<br><br>";
	
	for ($i=10; $i >= 1; $i--) { 
		echo $i.". Hello Shanto --! <br>";	
	}
    echo "<br><br>";

    /**
     * Break and continue with for loops
     */
	//Continue Statement
	for ($i=1; $i <=10 ; $i++) { 
		if ( $i == 5) {
			continue;
		}		
		
		echo $i;
		echo "<br>";		
	}

	echo "<br><br>";
	//Break Statement
	for ($i=1; $i <=10 ; $i++) { 
		if ( $i == 5) {
			break;
		}		
		
		echo $i ."<br>";
				
    }
    

    /**
     * Nested loops Advance
     */

    //Printed stars
	for ($i=0; $i <=5 ; $i++) { 	

		for ($j=0; $j <= $i; $j++) { 
			echo "*". " ";
		}
		echo "<br>";
	}
	for ($i=5; $i >=1 ; $i--) { 	

		for ($j=1; $j <= $i; $j++) { 
			echo "*". " ";
		}
		echo "<br>";
	}

	echo "<br><br>";

	for ($i=0; $i <5 ; $i++) { 	

		for ($j=0; $j <5; $j++) { 
			echo "*". " ";
		}
		echo "<br>";
	}
	echo "<br><br>";

	for ($i = 0; $i <25 ; $i= $i+5) { 	

		for ($j = $i; $j<$i+5; $j++) { 
			echo "*". " ";
		}
		echo "<br>";
	}
?>