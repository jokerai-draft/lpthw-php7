<?php

$tabby_cat = "\tI'm tabbed in.";
$persian_cat = "I'm split\non a line.";
$backslash_cat = "I'm \\ a \\ cat.";

$fat_cat = "
I'll do a list:
\t* Cat food
\t* Fishies
\t* Catnip\n\t* Grass
";

$fat_cat2 = <<<EOT
I'll do a list:
\t* Cat food
\t* Fishies
\t* Catnip\n\t* Grass
EOT;

print_r($tabby_cat);
print_r("\n");

print_r($persian_cat);
print_r("\n");

print_r($backslash_cat);
print_r("\n");

print_r($fat_cat);
print_r("\n");

print_r($fat_cat2 . "\n");

