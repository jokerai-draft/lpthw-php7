<?php

// > php ex20.php test.txt

list($script, $input_file) = $argv;

function print_all($handle){
    while(($line = fgets($handle)) !== false){
        echo $line;
    }
}

function print_a_line($line_count, $handle){
    $i = 0;
    while ($i < $line_count){
        $line = fgets($handle);
        ++$i;
    }
    unset($i);
    echo $line_count . ' ' . $line;
    rewind($handle);
}

$handle = fopen($input_file, "r");

print_r("First let's print the whole file: \n");

print_all($handle);

print_r("Now let's rewind, kind of like a tape. \n");

rewind($handle);

print_r("Let's print three lines: \n");

$current_line = 1;
print_a_line($current_line, $handle);
$current_line++;
print_a_line($current_line, $handle);
$current_line++;
print_a_line($current_line, $handle);
