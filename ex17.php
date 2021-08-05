<?php

// > php ex17.php 1.txt 2.txt

list($script, $fromfilename, $tofilename) = $argv;

print_r("Copying from {$fromfilename} to {$tofilename} \n");

$handle1 = fopen($fromfilename,"r");
$indata = "";
while(($line = fgets($handle1)) !== false){
    $indata .= $line;
}

// $bytesize = strlen($indata);
// print_r("The input file is {$bytesize} bytes long \n");

print_r("The input file is " . strlen($indata) . " bytes long \n");

print_r("Does the output file exist? " . (var_export(file_exists($tofilename), true)) . "\n");

print_r("Ready, hit RETURN to continue, CTRL-C to abort. \n");
readline();

$handle2 = fopen($tofilename,"w");
fwrite($handle2, $indata);

print_r("Alright, all done. \n");
fclose($handle1);
fclose($handle2);
