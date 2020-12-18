<?php

    /**
     * Example #1
     */
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }

    echo '<br><br>';
    /**
     * Example #2
     */
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x => $val) {
        echo "$x = $val<br>";
    }


    echo '<br><br>';
    /**
     * Example #3
     */

    $arr = array(2,4,6,8,10);
    foreach ($arr as $i){
        echo $i . "*2=" . $i*2 . "<br>";
    }

    echo '<br><br>';
    /**
     * Example #4
     */

    $employee = array(  
        "name" => "Robert",  
        "email" => "robert112233@mail.com",  
        "age" => 18,  
        "gender" => "male"
    
    );  
    
    // Loop through employee array  
    foreach($employee as $key => $element) {  
        echo $key . ": " . $element . "<br>";  
    } 

?>