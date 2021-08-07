<?php

// 'true' string to boolean
// 'false' string to boolean

// php false string to boolean 也有其它解决方案 提供了 "十六合一" 式的  scalability

print_r(var_export(true, true) . "\n");
print_r(var_export(false, true) . "\n");

print_r(var_export('true', true) . "\n");
print_r(var_export('false', true) . "\n");

print_r(var_export(boolval('true'), true) . "\n");
print_r(var_export(boolval('false'), true) . "\n"); # true

print_r(var_export(getBoolFromString('true'), true) . "\n");  # true
print_r(var_export(getBoolFromString('false'), true) . "\n"); # false
print_r(var_export(getBoolFromString(' '), true) . "\n");

function getBoolFromString($val){
    if (!is_null($val) && is_string($val)){  // is_null 判断野指针
        if ($val === 'true') { return true; }
        if ($val === 'false') { return false; }
        if ($val !== 'true' && $val !== 'false') { return null; }
    } else {
        return null;
    }
}
