<?php

// > php ex14.php Fiona

list($script, $user_name) = $argv;
$prompt = "> ";

print_r("Hi $user_name, I'm the $script script. ");
print_r("\nI'd like to ask you a few questions.");
print_r("\nDo you like me $user_name?");
$likes = readline($prompt);

print_r("\nWhere do you live $user_name?");
$lives = readline($prompt);

print_r("\nWhat kind of computer do you have?");
$computer = readline($prompt);

print_r("
\nAlright, so you said {$likes} about liking me.
You live in {$lives}. Not sure where that is.
And you have a {$computer} computer. Nice. \n
");

print_r(<<<EOT
\nAlright, so you said {$likes} about liking me.
You live in {$lives}. Not sure where that is.
And you have a {$computer} computer. Nice. \n
EOT);
