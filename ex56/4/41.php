<?php

// 字符串的获取

// 从数字获取字符串
// 将数字调整为某格式的字符串

print_r((string)3.1 . "\n"); // 3.1
print_r((string)3.100 . "\n"); // 3.1
print_r(sprintf("%.3f", 3.100) . "\n"); // 3.100
print_r(sprintf("%.6f", 3.100) . "\n"); // 3.100000

// Extract a single (unsigned) integer from a string

// https://stackoverflow.com/questions/6278296/extract-a-single-unsigned-integer-from-a-string

$str = 'In My Cart : 11 12 items';
preg_match_all('!\d+!', $str, $matches);
print_r($matches);
