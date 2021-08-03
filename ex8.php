<?php

// $formatter = "{:0} {:1} {:2} {:3}";
$formatter = ":0 :1 :2 :3\n";
print_r(strtr($formatter, [":0" => 1, ":1" => 2, ":2" => 3, ":3" => 4]));

print_r(strtr($formatter, [
    ":0" => "one",
    ":1" => "two",
    ":2" => "three",
    ":3" => "four",
    ]));

print_r(strtr($formatter, [
    ":0" => true,
    ":1" => false,
    ":2" => true,
    ":3" => false,
    ]));

print_r(strtr($formatter, [
    ":0" => var_export(true, true),
    ":1" => var_export(false, true),
    ":2" => var_export(true, true),
    ":3" => var_export(false, true),
    ]));

print_r(strtr($formatter, [
    ":0" => $formatter,
    ":1" => $formatter,
    ":2" => $formatter,
    ":3" => $formatter,
    ]));

print_r(strtr($formatter, [
    ":0" => "Try your",
    ":1" => "Own text here",
    ":2" => "Maybe a poem",
    ":3" => "Or a song about fear",
    ]));

