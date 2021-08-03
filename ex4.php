<?php

$cars = 100;
$space_in_a_car = 4.0;
$drivers = 30;
$passengers = 90;
$cars_not_driven = $cars - $drivers;
$cars_driven = $drivers;
$carpool_capacity = $cars_driven * $space_in_a_car;
$average_passengers_per_car = $passengers / $cars_driven;

print_r("There are $cars cars available. \n");
print_r("There are only $drivers drivers available. \n");
print_r("There will be $cars_not_driven empty cars today. \n");
print_r("We can transport $carpool_capacity people today. \n");
print_r("We have $passengers to carpool today. \n");
print_r("We need to put about $average_passengers_per_car in each car. \n");
print_r("\n");

$para = <<<EOT
There are $cars cars available.
There are only $drivers drivers available.
There will be $cars_not_driven empty cars today.
We can transport $carpool_capacity people today.
We have $passengers to carpool today.
We need to put about $average_passengers_per_car in each car.
EOT;
print_r($para);
print_r("\n");

