<?php

class Pastry
{
	public $ingredients = ['flour', 'sugar', 'eggs']
	public $typeOfPastry;

	public function __construct()
	{
		$this->typeOfPastry = $typeOfPastry
		$this->bake();
	}

	public function bake()
	{
		//access oven API
	}

	public function serve()
	{
		//put on a plate
	}
}

class Doughnut extends Pastry
{
	public $typeOfPastry = 'doughnut';

	public function __construct($flavor)
	{
		$this->flavor = $flavor;
		$this->bake();
	}

	public function glaze($glazeFlavor)
	{
		// add glaze to doughnut
	}
}

class Cookie extends Pastry
{
	public $typeOfPastry = 'cookie';

	public function __construct($flavor)
	{
		$this->flavor = $flavor
		$this->bake();
	}
}