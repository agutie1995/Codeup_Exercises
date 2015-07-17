<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Alex'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'Nic'];

//Write a function called combine_arrays() that will take in two array values and return a new array with values from both.
    //If the arrays have the same value at the same index, then it should only be added once.
    //If the values differ, then the value from the first array should be added and then the second.
    //The function should use a combination of array_shift() & array_push() or array_pop() & array_unshift().

function combineArrays($names, $compare){
    $newArray = [];
    foreach ($names as $value){
        $value2 = array_shift($compare);
        array_push($newArray, $value);
        if ($value != $value2){
            array_push($newArray, $value2);
        }
    }
    return $newArray;
}
print_r(combineArrays($names, $compare));
?>