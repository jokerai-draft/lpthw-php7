<?php

// > php ex16.php test.txt
// file_put_contents 写内容，覆盖现有内容，等于 fwrite w mode

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
    // $handle = fopen(trim($filename),"w");
    // print_r("Truncating the file. Goodbye!\n");
    // fclose($handle);

    print_r("Now I'm going to ask you for three lines.\n");
    $line1 = readline("line 1: ");
    $line2 = readline("line 2: ");
    $line3 = readline("line 3: ");

    print_r("I'm going to write these to the file. \n");
    $lines = $line1 . "\n" . $line2 . "\n" . $line3 . "\n";
    file_put_contents(trim($filename), $lines); # 即使有旧内容，也会覆盖掉

    print_r("And finally, it closes. \n");
}
