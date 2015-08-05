<?php

class Rectangle
{
	protected $width;
	protected $height;

	public function __construct($width, $height)
	{
		$this->width = $width;
		$this->height = $height;
	}

	public function setWidth(){
		return $this->width = trim($width);
	}

	public function setHeight(){
		return $this->height = trim($height);
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