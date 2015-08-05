<?php

class Person
{
    public $firstName;
    public $lastName;

    public static $population = 7241000000;

    public static function getScientificName()
    {
        return 'Homo sapien';
    }
}
// usually we would do the conventional way...
// $person = new Person();
// $person->population;

//but it gets condensed into one line if it's static..
$person = Person::$population;

echo $person;

echo Person::getScientificName() . PHP_EOL;