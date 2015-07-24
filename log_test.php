<?php
require_once 'Log.php';

$test = new Log();
$test->date = date("Y-m-d");
$test->filename = "log-{$test->date}.log";

$test->info("Login Successful");
$test->error("Login failed");
$test->logMessage("INFO", "log message");

//Create an instance of the Log class
//Set the $filename property in the class; use the format log-YYYY-MM-DD.log.
//Call the methods logMessage(), info(), and error() with to test the functionality of each.
//Use log_test.php to test your class by calling it from the command line.
?>