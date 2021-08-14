<?php
if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/TextReader.php');
require_once(__ROOT__.'/MyFileReader.php');
require_once(__ROOT__.'/MeinFileReader.php');

function test1() {
    $mfr = new MyFileReader();
    $mfr->filename = "test.txt";
    $mfr->readLine();
    $mfr->readLine();
    $mfr->readLine();
    // $mfr->readLine();
    // $mfr->readLine();
    // $mfr->readLine();
    // $mfr->readLine();
    // $mfr->readLine();
}
function test2() {
    $mfr = new MyFileReader();
    $mfr->filename = "test.txt";
    $mfr->readToEnd();
    $mfr->readToEnd();
    // $mfr->readToEnd();
}
function test3() {
    $mfr = new MeinFileReader();
    $mfr->filename = "test.txt";
    $mfr->readToEnd();
    // $mfr->readToEnd();
    // $mfr->readToEnd();
}
test3();
