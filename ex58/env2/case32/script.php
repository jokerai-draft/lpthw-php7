<?php declare(strict_types=1);

if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/Racket.php');
require_once(__ROOT__.'/TableTennisRacket.php');
require_once(__ROOT__.'/TennisRacket.php');

$p1 = TennisRacket::fromBrand("Yonex");

echo Racket::$counter;
echo TableTennisRacket::$counter;
echo TennisRacket::$counter;


$p2 = TableTennisRacket::fromType("flared"); // flared or penhold

echo Racket::$counter;
echo TableTennisRacket::$counter;
echo TennisRacket::$counter;


// echo $p1;
// echo "\n";
// echo $p2;

var_dump($p1);
echo "\n";
var_dump($p2);

// echo "\n";

// $p3 = TennisRacket::fromBrand("Wilson");
$p3 = TennisRacket::create(); $p3->weight = "300g";
$p4 = TennisRacket::fromType("Tweener");
var_dump($p3);
var_dump($p4);

echo Racket::$counter;
echo TableTennisRacket::$counter;
echo TennisRacket::$counter;

echo "\n";
$arr = [$p1, $p2, $p3, $p4];
foreach ($arr as $racket) {
    echo "This is a " . get_class($racket) . ". \n";
}

echo "\n";
echo sprintf("We got %s rackets: \n", Racket::$counter);
echo sprintf("%s tennis rackets \n", TennisRacket::$counter);
echo sprintf("and %s table tennis rackets \n", TableTennisRacket::$counter);


// 上下文
// http://mytabletennis.net/forum/flared-handle-for-penhold-style_topic22064.html
// brand

// 参考
// php new static parent - Google 搜索
// https://stackoverflow.com/questions/18636171/call-parent-static-method-in-php
// https://stackoverflow.com/questions/20886911/php-self-vs-parent-with-extends
