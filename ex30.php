<?php

$people = 30;
$cars = 40;
$trucks = 15;

if ($cars > $people) {
    print_r("We should take the cars. \n");
} elseif ($cars < $people) {
    print_r("We should not take the cars. \n");
} else {
    print_r("We can't decide. \n");
}

if ($trucks > $cars) {
    print_r("That's too many trucks \n");
} elseif ($trucks < $cars) {
    print_r("Maybe we could take the trucks. \n");
} else {
    print_r("We still can't decide. \n");
}

if ($people > $trucks) {
    print_r("Alright, let's just take the trucks. \n");
} else {
    print_r("Fine, let's stay home then. \n");
}
