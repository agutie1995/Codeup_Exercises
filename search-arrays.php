<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//Create a function that returns TRUE or FALSE if an array value is found.
    //Search for Tina and Bob in $names.
    //Make sure it works as expected.
function isInArray ($person, $names){
    $result = array_search($person, $names);

    if ($result !== false){
        return true;
    } else {
        return false;
    }
}

if (isInArray('Tina', $names)){
    echo "Tina is in the array." . PHP_EOL;
} else {
    echo "Tina is not in the array." . PHP_EOL;
}

if (isInArray('Bob', $names)){
    echo "Bob is in the array." . PHP_EOL;
} else {
    echo "Bob is not in the array" . PHP_EOL;
}

//Create a function to compare 2 arrays that returns the NUMBER (2) of values in common between the arrays.
    //Use the 2 example arrays and make sure your solution uses array_search().
    //SHOULD RETURN AN INTEGER
function compareArrays($names, $compare){
    $inCommon = 0;
    foreach ($names as $key => $value){
        $compareSearch = array_search($value, $compare);
        if ($compareSearch !== false){
            $inCommon++;
        }
    }
    return "The arrays have {$inCommon} names in common." . PHP_EOL;
}
echo compareArrays($names, $compare);
?>