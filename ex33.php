<?php

$i = 0;
$numbers = [];

while ($i < 6) {
    print_r("At the top is $i \n");
    $numbers[] = $i;

    ++$i;
    print_r("Numbers now: " . "[" . implode(", ", $numbers) . "]" . "\n");
    print_r("At the bottom i is $i \n");
}

echo "\n";
print_r("The numbers: \n" . "[" . implode(", ", $numbers) . "]" . "\n");

print_r("The numbers: \n");

foreach ($numbers as $num) {
    print_r($num . ', ');
}
unset($num);
