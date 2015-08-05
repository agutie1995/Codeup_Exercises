<?php
require_once 'classes/Auth.php';

class Log
{
    private $filename;
    public $date;
    public $prefix;
    private $handle;

    public function __construct($prefix = 'log')
    {
        $this->date = date("Y-m-d");
        $this->setFilename($prefix);
        // $this->filename = "{$prefix}-{$this->date}.log";
        $this->handle = fopen($this->filename, 'a');
    }


    public function logMessage($logLevel, $message)
    {
        $logDayTime = date("Y-m-d h:i:s a e");
        $stringToWrite = "{$logDayTime} [{$logLevel}] {$message}" . PHP_EOL;
        if (file_exists($this->filename)){
            file_put_contents($this->filename, $stringToWrite, FILE_APPEND);
        } else {
            file_put_contents($this->filename, $stringToWrite);
        }
    }
    protected function setFilename($prefix)
    {
        if (is_string($prefix)){
            $this->filename = "{$prefix}-{$this->date}.log";
        } else {
            die;
        }

        if(!is_writable($this->filename) && !touch($this->filename)){
            die('Unable to write to $this->filename');
        }
    }

    public function __destruct()
    {
        if (isset($this->handle)){
            fclose($this->handle);
        }
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
?>