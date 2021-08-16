<?php

class MeinFileReader extends TextReader
{
    public $filename;
    protected $handle;
    protected $EOF = false;

    protected function __construct() {
        echo "(prooudly created at " . static::$version . ")\n";
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

// 收缩域之后有一些变量
// 它把自己当作第一个父类看了, 它被看作潜在父类
