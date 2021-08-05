<?php

// 大文件读取，不载入全部文件到内存，一次只读取一行
// https://stackoverflow.com/questions/13246597/how-to-read-a-large-file-line-by-line
// https://stackoverflow.com/questions/5775452/php-read-specific-line-from-file/41215164#41215164

$handle = fopen("ex15_sample.txt","r");

if ($handle) {
    while(($line = fgets($handle)) !== false){
        echo $line;
    }
    fclose($handle);
} else {
    echo "invalid filename\n";
}



$file = new SplFileObject("ex15_sample.txt");

if ($file) {
    while (!$file->eof()){
        echo $file->fgets();
    }
    $file = null;
} else {
    die("invalid filename\n");
}
