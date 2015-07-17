<?php
//Create the $famousFakePhysicists string that lists the physicists and contains the "and" at the end.
    //Use push, pop, explode, and implode
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);
$lastItem = array_pop($physicistsArray);
array_push($physicistsArray,'and' );
//var_dump($physicistsArray);

$famousFakePhysicists = implode(', ', $physicistsArray);



echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists} {$lastItem}.";
?>