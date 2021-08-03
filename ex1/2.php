<?php

// heredoc
// get multiple line string

$name = 'Tom';
$para = "Good morning, $name. St. {$name}s, dolor sit amet consectetur adipisicing elit. Temporibus recusandae magnam ut sit aut quia fuga necessitatibus, doloremque, distinctio odit laboriosam dolorum placeat molestias adipisci ipsam? Adipisci nostrum tempore nobis";
print_r($para);

print_r("\n");
print_r("\n");

$poem = <<<EOT
rose is red
sky is blue
EOT;
print_r($poem);

print_r("\n");

// https://stackoverflow.com/questions/1848945/best-practices-working-with-long-multiline-strings-in-php

// EOT : End of transmission, EOD: End of data
