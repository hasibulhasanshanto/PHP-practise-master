<?php

/**
 * Switch Statement
 */

## Example 1: 
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
    break;
    case "blue":
        echo "Your favorite color is blue!";
    break;
    case "green":
        echo "Your favorite color is green!";
    break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

echo '<br><br>';

## Example 2: 
$day = 3;

	switch ($day) {
		case 1:
			echo "Today is Monday";
		break;

		case 2:
			echo "Today is Tuesday";
		break;

		case 3:
			echo "Today is Wedness Day";
		break;

		case 4:
			echo "Today is Thurs Day";
		break;

		case 5:
			echo "Today is Friday";
		break;

		case 6:
			echo "Today is Saturday";
		break;
		
		case 7:
			echo "Today is Sunday";
		break;

		
		default:
			echo "Yor input is invalid :(";
		break;
	}

?>