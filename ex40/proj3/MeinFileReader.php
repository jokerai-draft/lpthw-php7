<?php

class MeinFileReader extends TextReader
{
    public $filename;
    protected $handle;
    protected $EOF = false;

    public function __construct() {
    }

    public function readLine() {
        $this->handle ??= fopen($this->filename,"r");
        if ($this->handle && !$this->EOF) {
            $line = fgets($this->handle);
            if ($line !== false) echo $line;
            if ($line === false) {
                fclose($this->handle);
                $this->EOF = true;
                // echo "(come to EOF)";
            };
        }
    }

    public function readToEnd() {
        $fileContent = file_get_contents($this->filename);
        if ($fileContent) {
            echo $fileContent;
        }
    }

}
