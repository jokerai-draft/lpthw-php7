<?php
if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/IInstrumentPlayable.php');
require_once(__ROOT__.'/Guitar.php');

// 测试吉他

$instrument1 = new Guitar();
$instrument1->brand = "Gibson";

print_r($instrument1->testSound());
// print_r($instrument1->playDemo());

print_r($instrument1->brand);
