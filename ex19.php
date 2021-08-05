<?php

function cheese_and_crackers($cheese_count, $boxes_of_crackers){
    print_r("You have {$cheese_count} cheeses! \n");
    print_r("You have {$boxes_of_crackers} boxes of crackers! \n");
    print_r("Man that's enough for a party! \n");
    print_r("Get a blanket.\n\n");
}

print_r("We can just give the function numbers directly: \n");
cheese_and_crackers(20, 30);


print_r("OR, we can use variables from our script: \n");
$amount_of_cheese = 10;
$amount_of_crackers = 50;

cheese_and_crackers($amount_of_cheese, $amount_of_crackers);

print_r("We can even do math inside too: \n");
cheese_and_crackers(10 + 20, 5 + 6);


print_r("And we can combine the two, variables and math: \n");
cheese_and_crackers($amount_of_cheese + 100, $amount_of_crackers + 1000);
