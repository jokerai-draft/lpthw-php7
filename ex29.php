<?php

$people = 20;
$cats = 30;
$dogs = 15;

if ($people < $cats) {
    print_r("Too many cats! The world is doomed! \n");
}
if ($people > $cats) {
    print_r("Not many cats! The world is saved! \n");
}
if ($people < $dogs) {
    print_r("The world is drooled on! \n");
}
if ($people > $dogs) {
    print_r("The world is dry! \n");
}

$dogs += 5;
if ($people >= $dogs) {
    print_r("People are greater than or equal to dogs. \n");
}
if ($people <= $dogs) {
    print_r("People are less than or equal to dogs. \n");
}
if ($people === $dogs) {
    print_r("People are dogs. \n");
}
