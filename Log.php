<?php
class Log
{
    public $filename;
    public $date;

    public function logMessage($logLevel, $message)
    {
        $logDayTime = date("Y-m-d h:i:s a e");
        $handle = fopen($this->filename, 'a');
        $stringToWrite = "{$logDayTime} [{$logLevel}] {$message}" . PHP_EOL;
        if (file_exists($this->filename)){
            file_put_contents($this->filename, $stringToWrite, FILE_APPEND);
        } else {
            file_put_contents($this->filename, $stringToWrite);
        }
        fclose($handle);
    }

    public function info($message)
    {
        $logLevel = 'INFO';
        return $this->logMessage('INFO', $message);
    }

    public function error($message)
    {
        $logLevel = 'ERROR';
        return $this->logMessage('ERROR', $message);
    }
}

//A property called $filename where you store the name of the file for the log.
//A method called logMessage() that will take in a log level and message as before.
    //It will open the file stored in $filename for appending, output the message in the same format as before, and then close the handle.
//Methods info() and error() that will take in a message and forward it on to logMessage() along with the relevant log level.
?>