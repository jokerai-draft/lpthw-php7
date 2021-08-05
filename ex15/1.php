<?php

// > php ex15.php ex15_sample.txt
// defensive

list($script, $filename) = $argv;

$handle = fopen(trim($filename),"r");

if ($handle) {
    print_r("Here's your file {$filename}: \n");
    while(!feof($handle)){ // old style
        echo fgets($handle);
    }
    fclose($handle);
} else {
    echo "invalid filename\n";
}


print_r("Type the filename again: \n");
$filename2 = readline("> ");

$handle2 = fopen(trim($filename2),"r");

if ($handle2) {
    print_r("Here's your file {$filename2}: \n");
    while(($line = fgets($handle2)) !== false){
        echo $line;
    }
    fclose($handle2);
} else {
    echo "invalid filename\n";
}
