<?php declare(strict_types=1);

if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/Blueberry.php');

$berries = [];
$berry1 = new Blueberry();
$berry2 = new Blueberry();
$berry3 = new Blueberry();

$berries[] = $berry1;
$berries[] = $berry2;
$berries[] = $berry3;

print_r(count($berries) . "\n");

foreach ($berries as $v) {
    echo $v . "\n";
}
unset($v);

echo "\n";

$berry1 = new Blueberry("sweet");
$berry2->taste = "sour";
$berries[2]->taste = "sourrr";

foreach ($berries as $v) {
    echo $v . "\n";
}
unset($v);

// 参考 strict types
// https://php.watch/versions/7.4/typed-properties
