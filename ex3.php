<?php

print_r("I will now count my chickens:");

$r = 25 + 30 / 6;
print_r("Hens {$r}\n");

$r = 100 - 25 * 3 % 4;
print_r("Roosters $r\n");

$r = 100 - 25 * 3 % 4;
print_r("Roosters ");
print_r($r);
print_r("\n");

print_r("Roosters " . (100 - 25 * 3 % 4) . "\n");

print_r("Now I will count the eggs:");

print_r(3 + 2 + 1 - 5 + 4 % 2 - 1 / 4 + 6);
print_r("\n");

print_r("Is it true that 3 + 2 < 5 - 7? ");

var_export(3 + 2 < 5 - 7);
print_r("\n");

print_r("What is 3 + 2? " . (3 + 2) . "\n");

print_r("What is 5 - 7? ");
print_r(5 - 7);
print_r("\n");

print_r("Oh, that's why it's false.\n");

print_r("How about some more.\n");

// print_r("Is it greater?", 5 > -2);
// print_r("Is it greater or equal?", 5 >= -2);
// print_r("Is it less or equal?", 5 <= -2);

print_r("Is it greater? ");
var_export(5 > -2);
print_r("\n");

print_r("Is it greater or equal? ");
var_export(5 >= -2);
print_r("\n");

print_r("Is it less or equal? ");
var_export(5 <= -2);

print_r("\n");
