<?php
class Log {
    public $filename;

    public function logMessage($logLevel, $message)
    {
        $logDayTime = date("Y-m-d h:i:s a e");
        $handle = fopen($this->$filename, 'a');
        $log = "{$logDayTime} [{$logLevel}] {$message}" . PHP_EOL;
        fwrite($handle, PHP_EOL . $log);
        fclose($handle);
    }

    public function info($message)
    {
        return $this->logMessage('INFO', $message);
    }

    public function error($message)
    {
        return $this->logMessage('ERROR', $message);
    }
}

//A property called $filename where you store the name of the file for the log.
//A method called logMessage() that will take in a log level and message as before.
//    It will open the file stored in $filename for appending, output the message in the same format as before, and then close the handle.
//Methods info() and error() that will take in a message and forward it on to logMessage() along with the relevant log level.
?>