<?php

class JsonFileAccessModel
{
    protected $fileName;
    protected $file;

    function __construct($fileName) {
        $this->fileName = Config::DATABASE_PATH . $fileName . '.json';
    }

    private function connect($mode)
    {
        $this->file = fopen($this->fileName, $mode);
    }

    private function disconnect()
    {
        fclose($this->file);
    }

    public function read()
    {
        //echo 'read' . $this->$fileName;
        //$this->connect('r');
        fopen($this->fileName, $mode);
        $fileSize = filesize($this->$fileName);        
        echo $this->$fileName;
        echo $fileSize;
        $contents = fread($this->file,$fileSize);
        $this->disconnect();
        return $contents;        
    }

    public function write($contents)
    {
        $this->connect('w');
    }

    public function readJson()
    {

    }

    public function writeJson()
    {
        
    }
}



?>