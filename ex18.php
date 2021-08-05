<?php

function print_two(...$args){
    list($arg1, $arg2) = $args;
    print_r("arg1: $arg1, arg2: $arg2");
    print_r("\n");
}
// https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list

function print_two_again($arg1, $arg2){
    print_r("arg1: $arg1, arg2: $arg2");
    print_r("\n");
}

function print_one($arg1){
    print_r("arg1: $arg1");
    print_r("\n");
}

function print_none(){
    print_r("I got nothing.");
    print_r("\n");
}

print_two("Zed", "Shaw");
print_two_again("Zed","Shaw");
print_one("First!");
print_none();
