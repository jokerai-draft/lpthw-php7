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


# Remark

// https://tutorials.supunkavinda.blog/php/oop-abstract-classes-methods
// Abstract classes are important when you strictly need "child classes" to define a method. In most cases, abstraction is used when the parent class is inherited by multiple child classes which have almost the same behaviors.
// ... abstraction is the basis of interface. 不同之处在于 interface 里更加简化 甚至不能写 函数体
