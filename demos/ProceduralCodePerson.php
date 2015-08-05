<?php

$batman = new superhero('Bruce', 'Wayne');
echo $batman->fullName();
$batman->pseudonym = 'Batman';
echo $batman->alterEgo();
$batman->capeColor = 'black';

$superman = new Superhero('Clark', 'Kent');
$superman->pseudonym = 'Superman';
$superman->capeColor = 'red';
echo $superman->alterEgo();