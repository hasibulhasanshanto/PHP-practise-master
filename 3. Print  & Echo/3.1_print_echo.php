<?php
    ### With PHP, there are two basic ways to get output: echo and print.

    /**
     * echo and print are more or less the same. They are both used to output data to the screen.
     * 
     * The differences are small: echo has no return value while print has a return value of 1 so it can be used in 
     * expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is 
     * marginally faster than print.
    **/

    ### The echo statement can be used with or without parentheses: echo or echo().
    echo ('<h2>PHP is Fun!</h2>');
    echo 'Hello world!<br>';
    echo ("I'm about to learn PHP!<br>");
    echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>";

    ### The print statement can be used with or without parentheses: print or print().
    print "<h2>PHP is Fun!</h2>";
    print ("Hello world!<br>");
    print "I'm about to learn PHP!<br><br>";

    ### Diffrence between "" vs ''
    $name = 'ABCD';
    echo "Name is: $name<br>";
    echo 'Name is: $name<br>';

?>