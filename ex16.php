<?php

// > php ex16.php test.txt

list($script, $filename) = $argv;

print_r("
We're going to erase $filename.
If you don't want that, hit CTRL-C (^C).
If you do want that, hit RETURN.
");
readline("?");

print_r("Opening the file...\n");
$handle = fopen($filename, "w");

print_r("Truncating the file. Goodbye!\n");
// ftruncate($handle, 0); # 以 w mode 打开文件, 即使不调用 ftruncate 也会 truncate 。如果不想被 truncate 那么用 a mode 打开

print_r("Now I'm going to ask you for three lines.\n");
$line1 = readline("line 1: ");
$line2 = readline("line 2: ");
$line3 = readline("line 3: ");

print_r("I'm going to write these to the file. \n");
fwrite($handle, $line1);
fwrite($handle, "\n");
fwrite($handle, $line2);
fwrite($handle, "\n");
fwrite($handle, $line3);
fwrite($handle, "\n");

print_r("And finally, we close it. \n");
fclose($handle);
