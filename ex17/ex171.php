<?php

// > php ex171.php 1.txt 2.txt

list($script, $fromfilename, $tofilename) = $argv;

print_r("Copying from {$fromfilename} to {$tofilename} \n");

$indata = file_get_contents($fromfilename);

// $bytesize = strlen($indata);
// print_r("The input file is {$bytesize} bytes long \n");

print_r("The input file is " . strlen($indata) . " bytes long \n");

print_r("Does the output file exist? " . (var_export(file_exists($tofilename), true)) . "\n");

print_r("Ready, hit RETURN to continue, CTRL-C to abort. \n");
readline("?");

file_put_contents($tofilename, $indata);

print_r("Alright, all done. \n");
