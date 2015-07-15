<?php

// $a = 10;
// $b = 2;

function add($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "ERROR: Both arguments must be numbers." . PHP_EOL;
    }
}

function subtract($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "ERROR: Both arguments must be numbers." . PHP_EOL;
    }
}

function multiply($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "ERROR: Both arguments must be numbers." . PHP_EOL;
    }
}

function divide($a, $b)
{
    if ($b == 0) {
        return "ERROR: Cannot divide by 0." . PHP_EOL;
    } else if (is_numeric($a) && is_numeric($b)){
        return $a / $b;
    } else {
        return "ERROR: Both arguments must be numbers." . PHP_EOL;
    }
}

function modulus($a, $b)
{
    if ($b == 0) {
        return "ERROR: Cannot divide by 0." . PHP_EOL;
    } else if (is_numeric($a) && is_numeric($b)){
        return $a % $b;
    } else {
        return "ERROR: Both arguments must be numbers." . PHP_EOL;
    }
}

echo add(10, 5) . PHP_EOL;

echo subtract(20, 4) . PHP_EOL;

echo multiply(4, 3) . PHP_EOL;

echo divide(100, 0) . PHP_EOL;

echo modulus(10, 0) . PHP_EOL;



//Validate all the arguments, and display an error if the input is not numeric.
//Validate divide by 0 errors, display error if attempts to divide by 0 are made.
//Make the error messages show the values of the arguments.
//Refactor the error messages into their own function, have the other functions use it for error messaging.
?>