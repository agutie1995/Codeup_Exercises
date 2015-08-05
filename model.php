<?php

class Model
{
// An attributes property (array) that is not visible outside of the class
	protected $attributes = [];

// A magic setter to create key/value pairs in the attributes array.
	public function __set($key, $value)
    {
    	$this->attributes[$key] = $value;
    }

// A magic getter to retrieve values from the attributes array based on the key name, provided the key exists.
    public function __get($key)
    {
    	if (array_key_exists($key, $this->attributes)){
    		return $this->attributes[$key];
    	}
    	return NULL;
    }
}
// Test your new Model class by adding key/value pairs and retrieving them
$captainAmerica = new Model;
$captainAmerica->flight = 'No';
$captainAmerica->heatVision = 'No';
$captainAmerica->underwaterBreathing = 'No';
$captainAmerica->superStrength = 'Yes';

echo $captainAmerica->flight . PHP_EOL;
echo $captainAmerica->heatVision . PHP_EOL;
echo $captainAmerica->underwaterBreathing . PHP_EOL;
echo $captainAmerica->superStrength . PHP_EOL;
