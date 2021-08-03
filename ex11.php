<?php

print_r("How old are you? ");
$age = readline();

print_r("How tall are you? ");
$height = readline();

print_r("How much do you weigh? ");
$weight = readline();

print_r("So, you're {$age} old, {$height} tall and {$weight} heavy. \n\n");

print_r($age . "\n");
print_r(gettype($age) . "\n");
