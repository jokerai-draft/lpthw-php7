<?php

// 非标量值的相等
// https://www.php.net/manual/en/language.types.intro.php scalar type

// array

// https://www.codegrepper.com/code-examples/php/check+if+all+values+in+array+are+equal+php

$a = [1,2,3];
$b = [1,2,13];
$c = [1,2,'3'];
$d = [0=>1, 1=>2, 2=>3];
$e = ['0'=>1, '1'=>2, '2'=>3];
print_r(var_export($a === $b, true) . "\n");  #=> false
print_r(var_export($a === $c, true) . "\n");  #=> false
print_r(var_export($a === $d, true) . "\n");  #=> true
print_r(var_export($a === $e, true) . "\n");  #=> true
echo "\n";

// 参考
// array key 默认是 int ，即使是 numeric string 也会转化为 int ，如果是无法转化为 int 的 string 则保持 string 格式
var_dump(array_key_first($a));
var_dump(array_key_first($e));
var_dump(array_key_last($e));
echo "\n";

// object

// https://www.php.net/manual/en/language.oop5.object-comparison.php

function equal($a, $b){
    return serialize($a) === serialize($b);
}
$a = new stdClass();
$b = new stdClass();
$pointer = $a;

print_r(var_export($a === $b, true) . "\n");  #=> false
print_r(var_export($pointer === $b, true) . "\n");  #=> false
print_r(var_export($pointer === $a, true) . "\n");  #=> true

// print_r(serialize($a) . "\n");
// print_r(serialize($b) . "\n");
print_r(var_export(serialize($a) === serialize($b), true) . "\n");  #=> true
print_r(var_export($a === $b, true) . "\n");  #=> false

$a->bibi = 'abibi';
$b->bibi = 'abibi';
$c = new stdClass(); $c->c = new \DateTime();
$d = new stdClass(); $d->c = new \DateTime();
$a->didi = $c;
$b->didi = $d;
print_r(var_export(serialize($a) === serialize($b), true) . "... \n");  #=> false
// 所以 基于内容的相等性判断 就而言， serialize 并不是一个好方案 ...
// 参考 ex28/2x/23.php
// 参考
// 没有 strictness about the equality
// https://github.com/eloquent/equality

print_r(serialize($c->c) . "\n");
print_r(serialize($d->c) . "\n");

echo "\n";

// closure

$foo = function($a) {
    return $a * 2;
};

$bar = function($a) {
    return $a * 2;
};

print_r(var_export($foo === $bar, true) . "\n");  #=> false

// print_r(serialize($foo) . "\n");
// print_r(serialize($bar) . "\n");
