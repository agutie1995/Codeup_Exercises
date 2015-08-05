<?php
require_once 'Auth.php';
require_once 'inheritanceDemo.php';

 // Procedural Code
if (Auth::check() && Input::has('pastry'))
{
	$pastryDesired = Input::get('pastry');
	$pastry = new Pastry('doughnut');
	$pastry->serve();
}

$doughnut = new Doughnut('sugar');
$doughnut->glaze('chocolate')
$doughnut->serve();

$cookie = new Cookie('peanutButter');
$cookie->serve();