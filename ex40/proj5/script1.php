<?php
if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/SlimLib.php');


$str = "hello world";
$str2 = SlimLib::appendStarsTo($str);
echo $str2;

echo "\n";
echo SlimLib::getDate();

echo "\n";
echo SlimLib::getCallCount();



// lib 可以用在哪
// https://code.tutsplus.com/courses/php-fundamentals
// https://code.tutsplus.com/courses/php-fundamentals/lessons/creating-a-dataprovider-class -- 这里已经单独脱离出一个 view 层了

// https://code.tutsplus.com/courses/php-fundamentals/lessons/writing-a-data-abstraction-layer 明显用到了类方法
