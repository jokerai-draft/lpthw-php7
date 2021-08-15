<?php declare(strict_types = 1);

if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/Lib.php');

Lib::init();

$str = "hello world";
$str2 = Lib::appendStarsTo($str);
echo $str2;

echo "\n";
echo Lib::getDate();




echo "\n";
echo Lib::$version; // 静态类变量

echo "\n";
Lib::$version = "0.3.0";
echo Lib::$version;

echo "\n";
echo Lib::getVersion();
