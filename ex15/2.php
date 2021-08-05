<?php

// > php ex15.php ex15_sample.txt
// file_get_contents 一次读取所有行, 相对的有 file_put_contents 一次性写入多行到文件

list($script, $filename) = $argv;

$fileContent = file_get_contents(trim($filename));
if ($fileContent) { echo $fileContent; } else { echo "invalid filename\n"; }

print_r("Type the filename again: \n");
$filename2 = readline("> ");

$fileContent = file_get_contents(trim($filename2));
if ($fileContent) { echo $fileContent; } else { echo "invalid filename\n"; }
