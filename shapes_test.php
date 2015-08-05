<?php
require_once 'rectangle.php';
require_once 'square.php';


$rectangle = new Rectangle(5, 4);
echo $rectangle->area() . PHP_EOL;

$square = new Square(4, 4);
echo $square->perimeter() . PHP_EOL;