<?php

function add($a, $b){
    print_r("ADDING $a + $b \n");
    return $a + $b;
}

function subtract($a, $b){
    print_r("SUBTRACT $a - $b \n");
    return $a - $b;
}

function multiply($a, $b){
    print_r("MULTIPLYING $a * $b \n");
    return $a * $b;
}

function divide($a, $b){
    print_r("DIVIDING $a / $b \n");
    if ($b !== 0) { return $a / $b; }
}

print_r("Let's do some math with just functions\n");

$age = add(30, 5);
$height = subtract(78, 4);
$weight = multiply(90, 2);
$iq = divide(100, 2);

print_r("Age: $age, Height: $height, Weight: $weight, IQ: $iq \n");

# A puzzle for the extra credit, type it in anyway.
print_r("Here is a puzzle. \n");

$what = add($age, subtract($height, multiply($weight, divide($iq, 2))));

print_r("That becomes: $what . Can you do it by hand? \n" );
