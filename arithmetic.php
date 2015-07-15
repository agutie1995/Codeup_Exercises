<?php

function add($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else if ($a != is_numeric($a)) {
        return "Error: '$a' is an invalid input" . PHP_EOL;
    } else if ($b != is_numeric($b)) {
        return "Error: '$b' is an invalid input" . PHP_EOL; 
    }
}

function subtract($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else if ($a != is_numeric($a)) {
        return "Error: '$a' is an invalid input" . PHP_EOL;
    } else if ($b != is_numeric($b)) {
        return "Error: '$b' is an invalid input" . PHP_EOL; 
    }
}

function multiply($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else if ($a != is_numeric($a)) {
        return "Error: '$a' is an invalid input" . PHP_EOL;
    } else if ($b != is_numeric($b)) {
        return "Error: '$b' is an invalid input" . PHP_EOL; 
    }
}

function divide($a, $b)
{
    if ($b === 0) {
        return "ERROR: Cannot divide by 0." . PHP_EOL;
    } else if (is_numeric($a) && is_numeric($b)){
        return $a / $b;
    } else if ($a != is_numeric($a)) {
        return "Error: '$a' is an invalid input" . PHP_EOL;
    } else if ($b != is_numeric($b)) {
        return "Error: '$b' is an invalid input" . PHP_EOL; 
    }
}

function modulus($a, $b)
{
    if ($b === 0) {
        return "ERROR: Cannot divide by 0." . PHP_EOL;
    } else if (is_numeric($a) && is_numeric($b)){
        return $a % $b;
    } else if ($a != is_numeric($a)) {
        return "Error: '$a' is an invalid input" . PHP_EOL;
    } else if ($b != is_numeric($b)) {
        return "Error: '$b' is an invalid input" . PHP_EOL; 
    }
}

echo add('anotherstring', 5) . PHP_EOL;

echo subtract(20, 'string') . PHP_EOL;

echo multiply('pam', 3) . PHP_EOL;

echo divide(100, 'jim') . PHP_EOL;

echo modulus(10, 'alex') . PHP_EOL;


//Validate all the arguments, and display an error if the input is not numeric.
//Validate divide by 0 errors, display error if attempts to divide by 0 are made.
//Make the error messages show the values of the arguments.
//Refactor the error messages into their own function, have the other functions use it for error messaging.
?>