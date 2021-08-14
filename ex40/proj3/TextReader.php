<?php

// abstract class
// virtual method

abstract class TextReader
{
    abstract protected function readLine();
    abstract protected function readToEnd();
}

// https://www.php.net/manual/zh/language.oop5.abstract.php
// https://docs.microsoft.com/en-us/dotnet/api/system.io.streamreader?view=net-5.0
