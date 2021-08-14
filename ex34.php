<?php

$animals = ['bear', 'python3.6', 'peacock', 'kangaroo', 'whale', ];
print_r("The animal at 0 is $animals[0] \n");
print_r("The first animal is {$animals[1-1]} \n");

echo "\n";

foreach ($animals as $v) {
    $i ??= 1;
    print_r("The {$i}th animal is $v \n");
    ++$i;
}
