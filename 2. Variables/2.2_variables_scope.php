<?php

    /**
     * PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a 
     * strict sense, you can do things like adding a string to an integer without causing an error.
     * 
     * In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function, 
     * and by *enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.
    **/

    /**
     * The scope of a variable is the part of the script where the variable can be referenced/used.
     * 
     * PHP has three different variable scopes:
     * 
     * local
     * global
     * static
    **/

    ### Example 1
    $x = 5; // global scope    
        
    function myTest() {
        # using x inside this function will generate an error
        echo "<p>Variable x inside function is: $x</p><br>";
    }
    myTest();

    echo "<p>Variable x outside function is: $x</p><br>";
    echo "<br><br>";

    ### Example 2
    function myTest2() {
        $z = 5; // local scope
        echo "<p>Variable z inside function is: $z</p><br>";
    }
    myTest2();
    # using x outside the function will generate an error
    echo "<p>Variable z outside function is: $z</p><br>";

    echo "<br><br>";

    ### Example 3
    function myTest3() {
        static $x = 0; // static scope
        echo $x.'<br>';
        $x++;
    }

    myTest3(); // 0
    myTest3(); // 1
    myTest3(); // 2
    echo "<br><br>";

    ### Example 4
    $x = 5;
    $y = 10;

    function myTest4() {
        global $x, $y;
        $y = $x + $y;
    }

    myTest4();
    echo $y; // outputs 15
    echo "<br><br>";


    ### Example 5
    $x = 5;
    $y = 10;

    function myTest5() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myTest5();
    echo $y; // outputs 15

?>