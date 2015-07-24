<?php
require_once 'Log.php';

$date = date("Y-m-d");
$log = new Log();
$log->filename = "log-{date}.log";

$log->info("Log Info");
$log->error("Log Error");
$log->logMessage($logLevel, "log message");

//Create an instance of the Log class
//Set the $filename property in the class; use the format log-YYYY-MM-DD.log.
//Call the methods logMessage(), info(), and error() with to test the functionality of each.
//Use log_test.php to test your class by calling it from the command line.
?>