<?php

// > php ex15.php ex15_sample.txt

list($script, $filename) = $argv;

$handle = fopen($filename,"r");

print_r("Here's your file {$filename}: \n");

while(!feof($handle)){ // old style
    echo fgets($handle);
}
fclose($handle);

print_r("Type the filename again: \n");
$filename2 = readline("> ");

$handle2 = fopen($filename2,"r");

print_r("Here's your file {$filename2}: \n");

while(($line = fgets($handle2)) !== false){
    echo $line;
}
fclose($handle2);

/* prepare the file
ex15_sample.txt
```
This is stuff I typed into a file.
It is really cool stuff.
Lots and lots of fun to have in here.

```
*/
