<?php
if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/Bark.php');
require_once(__ROOT__.'/Quack.php');
require_once(__ROOT__.'/Dog.php');

require_once(__ROOT__.'/IntensiveSleep.php');
require_once(__ROOT__.'/SuperficialSleep.php'); // another style to choose
require_once(__ROOT__.'/ISleep.php');
require_once(__ROOT__.'/Duck.php');

function test1() {
    $d1 = new Dog();
    $d1->bark();
    // $d1->quack();
}

function test2() {
    $d1 = new Duck();
    $d1->quack();
    $sleepTest = $d1->testDepth();
    echo $sleepTest;
}
test2();
