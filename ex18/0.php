<?php

// 角色承担的视角
// 这个角色承担的是什么，变了没有，变了还是没变

$foo = 'Bob';
$bar = &$foo;
$zar = $foo;
print_r($foo);
print_r($bar);
print_r($zar);
print_r("\n\n");

$foo = 'Nono';
print_r($foo);
print_r($bar);
print_r($zar);
print_r("\n\n");

$bar = 'Kino';
print_r($foo);
print_r($bar);
print_r($zar);
print_r("\n\n");
