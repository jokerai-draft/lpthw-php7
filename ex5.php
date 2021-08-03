<?php
$my_name = 'Zed A. Shaw';
$my_age = 35; # not a lie
$my_height = 74; # inches
$my_weight = 180; # lbs
$my_eyes = 'Blue';
$my_teeth = 'White';
$my_hair = 'Brown';

print_r("Let's talk about {$my_name}.");
print_r("He's {$my_height} inches tall.");
print_r("He's {$my_weight} pounds heavy.");
print_r("Actually that's not too heavy.");
print_r("He's got {$my_eyes} eyes and {$my_hair} hair.");
print_r("His teeth are usually {$my_teeth} depending on the coffee.");

# this line is tricky, try to get it exactly right
$total = $my_age + $my_height + $my_weight;
print_r("If I add {$my_age}, {$my_height}, and {$my_weight} I get {$total}. \n");
