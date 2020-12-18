<?php 

    /**
     * Basic Index array
     */
    $fruits = ['Banana', 'Apple', 'Guava', 'Lichi'];
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';

    ## Get element by index
    echo $fruits[0].'<br>';
    echo $fruits[1].'<br>';
    echo $fruits[2].'<br>';

    /**
     * Associative Array :
     */
    $person = [
        'name' => 'Hasibul',
        'nickname' => 'Shanto',
        'age' => 28,
        'hobbies' => ['Cricket', 'Chess', 'Video Games']
    ];    

    echo '<pre>';
    var_dump($person);
    echo '</pre>';    

    print_r($person);
    echo '<br>';

    ## Get element by key
    echo $person['nickname'].'<br>';

    ## Null coalescing assignment operator in PHP 7.4
    // Example 
    if(!isset($person['address'])){
        $person['address'] = 'Unknown';
    }
    echo '<pre>';
    var_dump($person);
    echo '</pre>';  
    // Null coalescing way :  
    $person['city'] = $person['city'] ?? 'Dhaka';
    echo '<pre>';
    var_dump($person);
    echo '</pre>';  

    ## Get all keys from array
    echo '<pre>';
    var_dump(array_keys($person));
    echo '</pre>';

    ## Get all values from array
    echo '<pre>';
    var_dump(array_values($person));
    echo '</pre>';

    /**
     * Two dimentional arrays
     * Actully it represents DB data, in a array
     * In JS, its called object
     */

    $todos = [
        ['title' => 'Todo title 1', 'completed' => true],
        ['title' => 'Todo title 2', 'completed' => false]
    ];
    echo '<pre>';
    var_dump($todos);
    echo '</pre>';


?>