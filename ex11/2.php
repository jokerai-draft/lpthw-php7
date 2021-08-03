<?php

// readline 和 fgets 区别
// php cli ask for input readline or fgets - Google 搜索

// print_r("How old are you? ");
// $age = trim(fgets(STDIN));

// print_r("How tall are you? ");
// $height = trim(fgets(STDIN));

// print_r("How much do you weigh? ");
// $weight = trim(fgets(STDIN));

// print_r("So, you're {$age} old, {$height} tall and {$weight} heavy. \n");

print_r("How old are you? ");
$age = readline();

print_r("How tall are you? ");
$height = readline();

print_r("How much do you weigh? ");
$weight = readline();

print_r("So, you're {$age} old, {$height} tall and {$weight} heavy. \n");
