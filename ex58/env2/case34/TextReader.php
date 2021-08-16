<?php

abstract class TextReader
{
    abstract protected function readLine();
    abstract protected function readToEnd();

    public static $version = "0.0.1";
    public static function create() {
        return new static();
    }
}

// 参考
// https://www.php.net/manual/zh/language.oop5.late-static-bindings.php#114005
// return new static();
