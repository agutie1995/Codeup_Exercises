<?php

class Person
{
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName)
    {
        // echo 'New Person was constructed!';

        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}

$pinnochio = new Person('Pinnochio', 'Calvini');
echo "I am {$pinnochio->firstname} {$pinnochio->lastName}" . PHP_EOL;
