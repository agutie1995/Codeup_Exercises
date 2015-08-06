<?php

class Person
{
    private $firstName;
    private $lastName;

    private $superPowers = array();

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function fullName()
    {
    	return $this->firstName . ' ' . $this->lastName;
    }
}

class Superhero extends Person
{
    public $pseudonym;
    public $capeColor;

    public function alterEgo()
    {
        return 'Top Secret Alternate Ego: ' . $this->fullName();
    }

    public function hasCape()
    {
        return !empty($this->capeColor);
    }

    public function __set()
    {
    	$this->superPowers[$key] = $value;
    }

    public function __get($key)
    {
    	if (array_key_exists($key, $this->superPowers)){
    		return $this->superPowers[$key];
    	}

    	return false;
    }
}

$batman = new Superhero('Bruce', 'Wayne', 'Batman');

echo $batman->fullName() . PHP_EOL;
echo $batman->alterEgo() . PHP_EOL;

$batman->flight = flase;
$batman->heatVision = false;
$batman->underwaterBreathing = false;
$batman->superStrength = false;