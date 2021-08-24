<?php

// test1
function test1() {
print_r(var_export(isset($a), true) . "\n");    // false
print_r(var_export(is_null($a), true) . "\n");  // PHP Notice error
}

// test2
function test2() {
$a = null;
print_r(var_export(isset($a), true) . "\n");    // false  也就是说 $a=null; 不改变 isset($a); 的返回值
print_r(var_export(is_null($a), true) . "\n");  // true
}

test2();
