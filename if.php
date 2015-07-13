<?php

    $a = 5;
    $b = 10;
    $c = '10';

    // Shorten the next 2 statements into an if/else
    if ($a < $b) {
        echo "$a is less than $b" . PHP_EOL;
    } else {
        echo "$b is greater than $a" . PHP_EOL;
    }

    // Shorten the next 2 statements into an if/else
    if ($b >= $c) {
        // output the appropriate result
        echo "$b is greater than or equal to $c" . PHP_EOL;
    } else {
        // output the appropriate result
        echo "$b is less than or equal to $c" . PHP_EOL;
    }

    // combine the next 4 conditionals into
    // one if/else/elseif block that checks in order for:
    // identical, equal, not identical, not equal
    if ($b === $c) {
        // output the appropriate result
        echo "$b is identical to $c" . PHP_EOL;
    } else if ($b == $c) {
        // output the appropriate result 
        echo "$b is equal to $c" . PHP_EOL;
    } else if ($b !== $c) {
        // output the appropriate result
        echo "$b is not identical to $c" . PHP_EOL;
    } else {
        // output the appropriate result
        echo "$b is not equal to $c" . PHP_EOL;
    }

?>