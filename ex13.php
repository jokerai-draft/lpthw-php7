<?php

// > php ex13.php first 2nd 3rd

if ($argc >= 4) { list($script, $first, $second, $third) = $argv; }

print_r("The script is called:" . $script);
print_r("\nYour first variable is:" . $first);
print_r("\nYour second variable is:" . $second);
print_r("\nYour third variable is:" . $third);

print_r("\n" . $argc . "\n");

print_r($argv);
