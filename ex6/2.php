<?php

// 字符串的替换

// str_replace
// preg_replace

$string = 'The quick brown fox jumps over the lazy dog. 3 dogs in total. ';
print_r($string . "\n");
$processed ??= $string;
$processed = preg_replace('/The/', "the", $string);
$processed = preg_replace('/3/', "300", $processed);
print_r($string . "\n");
print_r($processed . "\n");

// https://www.php.net/preg_replace

$processed = str_replace('o', "0", $processed);
print_r($processed . "\n");
