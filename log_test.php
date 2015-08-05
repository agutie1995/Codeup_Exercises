<?php
require_once 'Log.php';

$test = new Log('log');
$test->info("Login Successful");
$test->error("Login failed");
$test->logMessage("INFO", "log message");
?>