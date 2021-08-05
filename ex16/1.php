<?php

// > php ex16.php test.txt
// defensive

list($script, $filename) = $argv;

if (file_exists(trim($filename)) && !is_dir(trim($filename))) {
    print_r("
We're going to erase $filename.
If you don't want that, hit CTRL-C (^C).
If you do want that, hit RETURN.
");
    readline("?");
} else {
    echo "invalid file \n";
}

if (file_exists(trim($filename)) && !is_dir(trim($filename))) {
    print_r("Opening the file...\n");
    $handle = fopen(trim($filename),"w");
    print_r("Truncating the file. Goodbye!\n");
    // 如果你用 w 模式打开文件，那你还需要 truncate() 吗？ 读一读 Python 的 open 函数文件，来搞明白这个问题
    // ftruncate($handle, 0);
    // fclose($handle);

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
}

// 关于 mode 的说明, "w" 自带 truncate 效果 故而不必显式调用 ftruncate 来从0消除内容
// https://phppot.com/php/php-file-handling/
// https://www.php.net/manual/en/function.fopen.php
// https://stackoverflow.com/questions/11939847/w-mode-in-fopen

// 如果不想被 truncate 那么用 a mode 打开
// 一旦 w mode 打开 那么等于是自带了 truncate
