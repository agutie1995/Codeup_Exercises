<?php
require_once 'rectangle.php';
require_once 'square.php';


$rectangle = new Rectangle(5, 4);
echo $rectangle->area() . PHP_EOL;
echo $rectangle->perimeter() . PHP_EOL;
echo '-----------------------' . PHP_EOL;

$rectangle2 = new Rectangle(3, 9);
echo $rectangle2->area() . PHP_EOL;
echo $rectangle2->perimeter() . PHP_EOL;
echo '========================' . PHP_EOL;

$square = new Square(4);
echo $square->perimeter() . PHP_EOL;
echo $square->area() . PHP_EOL;
echo '------------------------' . PHP_EOL;

$square2 = new Square(5);
echo $square2->perimeter() . PHP_EOL;
echo $square2->area() . PHP_EOL;