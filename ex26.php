<?php

// > php ex26.php test.txt

print_r("How old are you?");
$age = readline();
print_r("How tall are you?");
$height = readline();
print_r("How much do you weigh?");
$weight = readline();

print_r("So, you're {$age} old, {$height} tall and {$weight} heavy.\n");

list($script, $filename) = $argv;

$handle1 = fopen(trim($filename), "r");

print("Here's your file {$filename}: \n");

while(($line = fgets($handle1)) !== false){
    echo $line;
}
fclose($handle1);

print_r("Type the filename again: \n");
$filename2 = readline("> ");

$handle2 = fopen(trim($filename2), "r");

while(($line = fgets($handle2)) !== false){
    echo $line;
}
fclose($handle2);


print_r('Let\'s practice everything. ');

print_r('You\'d need to know \'bout escapes
      with \\ that do \n newlines and \t tabs.');

$poem = <<<EOT
\tThe lovely world
with logic so firmly planted
cannot discern \n the needs of love
nor comprehend passion from intuition
and requires an explanation
\n\t\twhere there is none.
EOT;

print_r("\n--------------\n");
print_r($poem);
print_r("\n--------------\n");

$five = 10 - 2 + 3 - 6;
print_r("This should be five: {$five}\n");

function secret_formula($started){
    $jelly_beans = $started * 500;
    $jars = $jelly_beans / 1000;
    $crates = $jars / 100;
    return [$jelly_beans, $jars, $crates,];
}

$start_point = 10000;
list($beans, $jars, $crates) = secret_formula($start_point);

# remember that this is another way to format a string
print_r(strtr("With a starting point of: :0 \n", [":0" => $start_point]));

# it's just like with an f"" string
print_r("We'd have {$beans} beans, {$jars} jars, and {$crates} crates. \n");

$start_point = $start_point / 10;

print_r("We can also do that this way: \n");
$formula = secret_formula($start_point);
# this is an easy way to apply a list to a format string
print_r(strtr("We'd have :0 beans, :1 jars, and :2 crates. \n", [":0" => $formula[0], ":1" => $formula[1], ":2" => $formula[2]]));


$people = 20;
$cats = 30;
$dogs = 15;


if ($people < $cats){
    echo "Too many cats! The world is doomed!";
}
if ($people > $cats){
    print_r("Not many cats! The world is saved!");
}
if ($people < $dogs){
    print_r("The world is drooled on!");
}
if ($people > $dogs){
    print_r("The world is dry!");
}

$dogs += 5;

if ($people >= $dogs){
    print_r("People are greater than or equal to dogs.");
}
if ($people <= $dogs){
    print_r("People are less than or equal to dogs.");
}

if ($people === $dogs){
    print_r("People are dogs.");
}
