<?php

class Rectangle
{
	private $width;
	private $height;

	public function __construct($width, $height)
	{
		$this->width = $width;
		$this->height = $height;
	}

	public function setWidth(){
		$this->width = trim($width);
	}

	public function setHeight(){
		$this->height = trim($height);
	}

	public function getWidth(){
		return $this->width;
	}

	public function getHeight(){
		return $this->height;
	}

	public function area()
	{
		return $this->width * $this->height;
	}

	public function perimeter()
	{
		return ($this->width * 2) + ($this->height * 2);
	}
}