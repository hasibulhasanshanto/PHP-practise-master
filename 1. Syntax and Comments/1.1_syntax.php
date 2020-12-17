<!-- Basic Syntax  -->
<?php
// PHP code goes here
?>

<!DOCTYPE html>
<html>
    <body> 

    <?php
    /**
    * In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
    *
    */
        ECHO "Hello World!<br>";
        echo "Hello World!<br>";
        EcHo "Hello World!<br>";

        echo "<br><br>";
    ?>


    <?php
    /**
     * Look at the example below; only the first statement will display the value of the $color variable! This is because $color, * $COLOR, and $coLOR are treated as three different variables:
     * Variables in PHP are case sensative
     */
        echo "In PHP, variables are Case Sensative. <br><br>";

        $color = "red";
        $COLOR = 'GREEN';
        $coLOR = 'blUE';
        echo "My car is " . $color . "<br>";
        echo "My house is " . $COLOR . "<br>";
        echo "My boat is " . $coLOR . "<br>";
    ?>


    </body>
</html>