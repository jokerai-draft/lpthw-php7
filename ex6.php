<?php

$types_of_people = 10;
$x = "There are {$types_of_people} types of people. ";

$binary = "binary";
$do_not = "don't";
$y = "Those who know {$binary} and those who {$do_not}. ";

print_r($x);
print_r($y);

print_r("I said: $x");
print_r("I also said: '$y'");
print_r("\n");

$hilarious = false;
$joke_evaluation = "Isn't that joke so funny?! :isFunny. ";
$str1 = strtr($joke_evaluation, [":isFunny" => var_export($hilarious,true)]);
print_r($str1);

$hilarious = false;
$joke_evaluation = "Isn't that joke so funny?! :isFunny. ";
print_r(strtr($joke_evaluation, [":isFunny" => var_export($hilarious,true)]));

$w = "This is the left side of...";
$e = "a string with a right side.";
print_r("{$w}{$e}");
