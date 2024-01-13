<?php
    $jsonReceived = $_REQUEST['json'];
    
    // echo($jsonReceived);   

    // display structured information about one or more expressions that includes its type and value.
    // echo(var_dump($jsonReceived));   

    // Returns a string with backslashes stripped off
    // echo(var_dump(stripcslashes($jsonReceived)));   

    // Take a JSON encoded string and convert it into a PHP value
    echo(var_dump(json_decode(stripcslashes($jsonReceived))));   
?>