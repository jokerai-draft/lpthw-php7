<?php

// 函数内外视角
// 是否改变函数外的情况
// https://www.javatpoint.com/php-call-by-reference

// 函数外面获取不到函数里面的值
// 函数里面的值 函数外面不关心
// 函数外面关心的是函数的返回值(并赋值给谁)

$foo = 'Bob';
$bar = &$foo; # bar is a pointer

print_r($foo);
print_r($bar);
print_r("\n\n");

$foo = 'Nono';
print_r($foo);
print_r($bar);
print_r("\n\n");

$bar = 'Kino';
print_r($foo);
print_r($bar);
print_r("\n\n");

$bak = '32';
$bar = &$bak;

print_r($foo);
print_r($bar);
print_r("\n\n");

$bak = (new \DateTime())->format('Y-m-d H:i:s');

print_r($foo);
print_r($bar);
print_r("\n\n");

$pak = 3.12;
$bar = &$pak;

print_r($foo);
print_r($bar);
print_r("\n\n");

print_r(gettype($pak) . "\n"); # double
print_r(gettype($bar) . "\n"); # double
