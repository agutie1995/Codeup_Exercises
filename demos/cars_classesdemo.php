<?php

class Automobile
{

	public $make;
	public $model;
	public $color;
	public $description = "Made by" . $this->make . " and it's the " . $this->model . " model.";

	public function setColor($color)
	{
		return $this->color = $color;
	}

	public function honk()
	{
		return 'BEEP, BEEP';
	}

	public function accelerate()
	{
		return $this->increasesFuelAirMixture();
	}

	public function increasesFuelAirMixture()
	{
		//api to the fuel injectors
	}

	public function brake($message)
	{
		echo "Hey man, " . $message;
		//engages brakes and screatches to a hault
	}

}

//
//procedual code is where we make instances of an object
$newCar = new Automobile();
$newCar->color = 'blue';
$newCar->make = 'chevy';
$newCar->model = 'silverado';
$newCar->brake('where\'s your blinker?');
$newCar->honk();
$newCar-> accelerate();

var_dump($newCar); //I would get...
//data type
//make, model, color

$batmobile = new Automobile();
$batmobile->setColor = 'black';
$batmobile->make = 'Wayne Enterprises';
$batmobile->model = 'justice';
$batmobile->brake('I\'m Batman');
$batmobile->honk();
$batmobile-> accelerate();

//the class is like our blueprint
//$newCar and $batmobile are different things (objects) within the class of automobile
