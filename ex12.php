<?php

$age = readline("How old are you? ");

$height = readline("How tall are you? ");

$weight = readline("How much do you weigh? ");

print_r("So, you're {$age} old, {$height} tall and {$weight} heavy. \n\n");

print_r($age . "\n");
print_r(gettype($age) . "\n");
