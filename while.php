<?php

    $test = 5;
    $conditionOne = 4;
    $conditionTwo = 2;

    while ($test <= 15) {
        if ($test % $conditionOne == 0 && $test % $conditionTwo == 0) {
            echo "$test is divisible by both {$conditionOne} and {$conditionTwo}" . PHP_EOL;
        } else if ($test % $conditionTwo == 0) {
            echo "$test is divisible by {$conditionTwo}" . PHP_EOL;
        } else {
            echo "$test" . PHP_EOL;      
        }
        $test++;
    }

?>