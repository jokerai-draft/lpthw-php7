<?php

/*
继承自哪里

参考
https://docs.microsoft.com/en-us/dotnet/api/system.io.streamreader?view=net-5.0
*/

class MyFileReader extends TextReader
{
    public $filename;
    protected $handle;
    protected $EOF = false;

    public function __construct() {
    }

    /*
    public function readLine() {
        $this->handle = fopen($this->filename,"r");
        if ($this->handle) {
            $line = fgets($this->handle);
            if ($line !== false) echo $line;
            if ($line === false) fclose($this->handle);
        }
    } // 不够 defensive
    */

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
        $this->handle = fopen($this->filename,"r");
        while (($line = fgets($this->handle)) !== false) {
            echo $line;
        }
        fclose($this->handle);
    }

}
