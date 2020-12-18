<?php 

    /**
     * PHP Functions
     */

	## Simple Function
	function Greetings()
	{
		echo "Welcome Everyone! <br>";
	}

	Greetings();
	Greetings(); 

	## Function with argument or passing values
	function Hello($msg)
	{
		echo "Hello ". $msg."!". "<br>";
	}

	Hello("Shanto"); 
	Hello("Nadia");

	function sum($a = 10, $b = 10)
	{
		$res = $a + $b;
		echo "Sum is: $res"."<br>";
	}

	sum(); //Print default Value
	sum(100, 50);

	## Function with return Value
	function total($x, $y, $z)
	{
		$total = $x + $y + $z;
		return $total;
	}

	function percentage($per)
	{
		$result = $per /3;
		return $result;
	}	
	$total = total(10,20,30); 

	$calc = percentage($total);
    echo "Average is: $calc";
    
    echo '<br><br>';
    ### Function which accepts infinity values
    function sum2(...$nums){ // 3 dots notation operator
        $sum = 0;
        foreach($nums as $n){
            $sum += $n;
        }
        return $sum;
    } 
    echo sum2(1,2,3,4,5,6);
    echo '<br>';

    /**
     * Arrow function php from 7.4
     */

    // function sum3(...$nums){ // 3 dots notation operator
    //     return array_reduce($nums, fn($carry, $n) => $carry + $n);
    // } 
    // echo sum3(1,2,3,4,5,6);
    // echo '<br>';
    


?>