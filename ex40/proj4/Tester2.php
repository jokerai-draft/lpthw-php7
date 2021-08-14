<?php
if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/IDevicePlayable.php');
require_once(__ROOT__.'/DVDPlayer.php');

// 测试吉他

// 测试DVD播放器

$p1 = new DVDPlayer();
$p1->brand = "BBK1016P";

print_r($p1->testSound());
print_r($p1->playDemo());
