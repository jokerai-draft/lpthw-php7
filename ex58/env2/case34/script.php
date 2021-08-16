<?php declare(strict_types=1);

if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/TextReader.php');
require_once(__ROOT__.'/MeinFileReader.php');

$fr1 = MeinFileReader::create();
$fr1->filename = "test.txt";

$fr1->readToEnd();

echo "\n";

$fr1->readLine();
$fr1->readLine();

echo "\n";
echo MeinFileReader::$version;
