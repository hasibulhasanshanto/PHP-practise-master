<?php

/**
 * PHP Date & Time
 */
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l"). "<br>";

    ## Copyright date area
    echo 'Copyright @'.date("Y"). "<br>";

    ## Current date and time
    echo "The time is " . date("Y-m-d h:i:sa")."<br>";

    ## Yesterday
    echo "Yesterday was " . date("Y-m-d H:i:s", time() -60*60*24 ) . "<br>";
    ## Get Your Time Zone
    date_default_timezone_set("Asia/Dhaka");
    echo "The time is " . date("h:i:sa")."<br>";

    ## Create a Date With mktime()
    $d=mktime(11, 14, 54, 8, 12, 2014);
    echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";

    ## Create a Date From a String With strtotime()
    $d=strtotime("10:30pm April 15 2014");
    echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";


    ## More dates example
    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("+3 days");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("+1 years");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    ## Days remaining calculates
    $d1=strtotime("August 10");
    $d2=ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 ." days until August 10.". "<br>";

    ## More example
    echo $today1 = date("F j, Y, g:i a"). "<br>";                // March 10, 2001, 5:16 pm
    echo $today2 = date("m.d.y"). "<br>";                       // 03.10.01
    echo $today3 = date("j, n, Y"). "<br>";                       // 10, 3, 2001
    echo $today4 = date("Ymd"). "<br>";                           // 20010310
    echo $today5 = date('h-i-s, j-m-y, it is w Day'). "<br>";     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
    echo $today6 = date('\i\t \i\s \t\h\e jS \d\a\y.'). "<br>";   // it is the 10th day.
    echo $today7 = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
    echo $today8 = date('H:m:s \m \i\s\ \m\o\n\t\h'). "<br>";     // 17:03:18 m is month
    echo $today9 = date("H:i:s"). "<br>";                         // 17:16:18
    echo $today10 = date("Y-m-d H:i:s"). "<br>";                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)

    ## Print current timestam
    echo '<br><br>';
    echo time();

    ## Parse date
    echo '<br><br>';
    $parseDate = date_parse('2020-10-12 09:00:00');

    echo '<pre>';
    var_dump($parseDate);
    echo '</pre>';

    ## Parse date format
    echo '<br><br>';
    $dateString = 'March 10, 2001 09:00:00';
    $parseDate2 = date_parse_from_format('F j Y H:i:s',  $dateString);

    echo '<pre>';
    var_dump($parseDate2);
    echo '</pre>';





    /**
     * For more date  functions refference :
     * https://www.w3schools.com/php/php_ref_date.asp
     * https://www.php.net/manual/en/datetime.format.php
     * https://www.php.net/manual/en/function.date.php
     */

?>