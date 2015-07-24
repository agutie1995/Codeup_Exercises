<?php
require_once 'Log.php';

$test = new Log();
$test->info("Login Successful");
$test->error("Login failed");
$test->logMessage("INFO", "log message");

//Update log_test.php; pass the prefix 'cli' to the class and do not manually set the $filename property.
	//Test from the command line.
?>