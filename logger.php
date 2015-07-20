<?php
//Complete the logMessage function so that it has the following features
    //Log to a file named log-YYYY-MM-DD.log
    //If the log file for a given day does not yet exist, it should be created.
        //If it already exists, it should be appended to.
    //Newer logs should appear at the end of the log file.
    //Log entries should match the format: YYYY-MM-DD HH:MM:SS [LEVEL] MESSAGE
function logMessage($logLevel, $message)
{
    $date = date("Y-m-d");
    $logDayTime = date("Y-m-d h:i:s a");
    $filename = "log-{$date}.log";
    $handle = fopen($filename, "a");
    $log = "{$logDayTime} [{$logLevel}] {$message}" . PHP_EOL;
    if (file_exists($filename)){
        file_put_contents($filename, $log, FILE_APPEND);
    } else {
        file_put_contents($filename, $log);
    }
    fclose($handle);
}

// logMessage("INFO", "This is an info message.");
// logMessage("ERROR", "This is an error message.");

//Add logInfo() and logError() functions that call logMessage(), passing the appropriate log level values.
    //Replace the calls to logMessage() with calls to the new functions you just created
function logInfo($message)
{
    return logMessage("INFO", $message);
}

function logError($message)
{
    return logMessage("ERROR", $message);
}

logInfo("Don't Forget To Be Awesome");
logError("404");

?>