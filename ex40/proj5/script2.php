<?php
if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/Lib.php');

Lib::init();

$str = "hello world";
$str2 = Lib::appendStarsTo($str);
echo $str2;

echo "\n";
echo Lib::getDate();

echo "\n";
echo Lib::getCallCounter();



// lib 可以用在哪
// https://code.tutsplus.com/courses/php-fundamentals
// https://code.tutsplus.com/courses/php-fundamentals/lessons/creating-a-dataprovider-class -- 这里已经单独脱离出一个 view 层了

// https://code.tutsplus.com/courses/php-fundamentals/lessons/writing-a-data-abstraction-layer 明显用到了静态类

echo "\n";
echo Lib::$version; // 类变量

echo "\n";
Lib::$version = "0.3.0";
echo Lib::$version;
