<?php

require_once 'rectangle.php';

class Square extends Rectangle
{
	public function __construct($width)
	{
		parent::__construct($width, $width);
		$this->width = $width;
	}

	public function setWidth(){
		return $this->width = trim($width);
	}

	public function perimeter()
	{
		return ($this->width * 4);
	}

	public function area()
	{
		return $this->width * 4;
	}
}