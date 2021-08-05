<?php

// > php 3.php test.txt
// append to file

list($script, $filename) = $argv;

if (file_exists(trim($filename)) && !is_dir(trim($filename))) {
    print_r("
We're going to append to $filename.
If you don't want that, hit CTRL-C (^C).
If you do want that, hit RETURN.
");
    readline("?");
} else {
    echo "invalid file \n";
}

if (file_exists(trim($filename)) && !is_dir(trim($filename))) {
    print_r("Opening the file...\n");
    $handle = fopen(trim($filename),"a");

    print_r("Now I'm going to ask you for three lines.\n");
    $line1 = readline("line 1: ");
    $line2 = readline("line 2: ");
    $line3 = readline("line 3: ");

    print_r("I'm going to append these to the file. \n");
    fwrite($handle, $line1);
    fwrite($handle, "\n");
    fwrite($handle, $line2);
    fwrite($handle, "\n");
    fwrite($handle, $line3);
    fwrite($handle, "\n");

    print_r("And finally, we close it. \n");
    fclose($handle);
}

// 关于 mode 的说明,
// https://phppot.com/php/php-file-handling/
// https://www.php.net/manual/en/function.fopen.php
// https://stackoverflow.com/questions/11939847/w-mode-in-fopen
