<?php

// 到最后真正发生的事情其实是 append(mystuff, 'hello') ，不过你所看到的 mystuff.append('hello')
// https://www.bookstack.cn/read/LearnPython3TheHardWay/spilt.43.learn-py3.md

$ten_things = "Apples Oranges Crows Telephone Light Sugar";

print_r("Wait there are not 10 things in that list. Let's fix it.");

$stuff = explode(" ", $ten_things);
$more_stuff = ["Day", "Night", "Song", "Frisbee", "Corn", "Banana", "Girl", "Boy"];

while (count($stuff) !== 10) {
    $next_one = array_pop($more_stuff);
    print_r("Adding: " . $next_one . "\n");
    $stuff[] = $next_one;
    print_r("There are " . count($stuff) . " items now. \n");
}

print_r("There we go: " . "[" . implode(", ", $stuff) . "]" . "\n");

print_r("Let's do some things with stuff." . "\n");

print_r($stuff[1] . "\n");
print_r($stuff[array_key_last($stuff)]. "\n"); # whoa! fancy
print_r(array_pop($stuff) . "\n");

print_r(implode(" ", $stuff) . "\n"); # what? cool

print_r(implode("#", array_slice($stuff, 3, 2)) . "\n"); // Telephone#Light
