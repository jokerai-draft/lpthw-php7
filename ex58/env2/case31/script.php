<?php declare(strict_types=1);

if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/TableTennisRacket.php');

$p1 = TableTennisRacket::fromBrand("ShuangXi");
$p2 = TableTennisRacket::fromType("flared"); // flared or penhold

echo $p1;
echo "\n";
echo $p2;

// var_dump($p1);
// echo "\n";
// var_dump($p2);

echo TableTennisRacket::$counter;

// 上下文
// http://mytabletennis.net/forum/flared-handle-for-penhold-style_topic22064.html
// brand
