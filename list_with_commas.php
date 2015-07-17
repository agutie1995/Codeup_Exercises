<?php
//Create the $famousFakePhysicists string that lists the physicists and contains the "and" at the end.
    //Use push, pop, explode, and implode
// $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// $physicistsArray = explode(', ', $physicistsString);
// $lastItem = array_pop($physicistsArray);
// array_push($physicistsArray,'and' );
// //var_dump($physicistsArray);

// $famousFakePhysicists = implode(', ', $physicistsArray);

// echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists} {$lastItem}.";


//Turn your solution into a function named humanizedList().
    //You should be able to pass the $physicistsArray as the only argument, and your function will return the result.

//Converts array into list n1, n2, ..., and n3
function humanizedList($physicistsArray) {
    sort($physicistsArray);
    $lastItem = array_pop($physicistsArray);
    array_push($physicistsArray, 'and ');
    $humanizedList = implode(', ', $physicistsArray) . $lastItem;
    return $humanizedList;
}

//List of famous peeps
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

//TODO: Convert the string into an array
$physicistsArray = explode(', ', $physicistsString);

//Humanize that list
$famousFakePhysicists = humanizedList($physicistsArray);

//Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";


//Update your code to list the physicists by first name, in alphabetical order.

//Create a second argument to make alphabetical sorting optional.

//Default alphabetical sorting to false. If no args are passed, no sorting takes place.
?>