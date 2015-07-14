<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// Construct a loop that iterates through each value and outputs its type
foreach ($things as $thing){
	if (is_array($thing)){
		echo "Array" . PHP_EOL;
	} else if(is_string($thing)){
		echo "String" . PHP_EOL;
	} else if(is_bool($thing)){
		echo "Boolean" . PHP_EOL;
	} else if(is_null($thing)){
		echo "Null" . PHP_EOL;
	} else if (is_float($thing)){
		echo "Float" . PHP_EOL;
	} else if (is_int($thing)){
        echo "Int" . PHP_EOL;
	}
}

// Construct a loop that iterates through each value and outputs only values with a type that is scalar.
foreach ($things as $thing){
    if (is_scalar($thing)){
        echo $thing . PHP_EOL;
    }
}

// Create a loop that will echo out every value, including those nested in arrays.
foreach ($things as $thing){
    if (is_array($thing)){
        echo implode($thing, ', ') . PHP_EOL;
    } else {
        echo $thing . PHP_EOL;
    }
}