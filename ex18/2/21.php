<?php

// 对值的更改，是可以获得原数据的
// 对 object 的更改，是无法获得原数据的 // 默认 pass by reference (对 非 object 默认 pass by value )

// 对值的更改
// 对基本数据类型的更改

$a = 12;
$b = "plau";
$c = new stdClass();
$d = ["Monday", "Tuesday", "Wednesday"];
$e = ["CHN" => "China", "GBR" => "UK"];
print_r(gettype($a) . "\n");
print_r(gettype($b) . "\n");
print_r(gettype($c) . "\n"); // object
print_r(gettype($d) . "\n"); // array is (not) also object
print_r(gettype($e) . "\n"); // array is (not) also object

print_r("\n------\n");

function simpleAlter($a){
    $a = 122;
}

print_r($a);
simpleAlter($a);
print_r($a);

print_r("\n------\n");

function simpleAlterB($b){
    $b .= "ghost";
}

print_r($b);
simpleAlterB($b);
print_r($b);

print_r("\n------\n");

function simpleAlterC($c){
    $c->color = "blue";
}

print_r($c);
simpleAlterC($c);
print_r($c);

print_r("\n------\n");

function simpleAlterD($d){
    $d[] = "Thursday";
}

print_r($d);
simpleAlterD($d);
print_r($d);

print_r("\n------\n");

function simpleAlterE($e){
    $e["GBR"] = "the UK";
}

print_r($e);
simpleAlterE($e);
print_r($e);

print_r("\n------\n");

// 参考 v2ex.com/t/774968#r_10497058 神奇的 Javascript，谁能告诉我为什么

// 参考 php array pass by reference - Google 搜索 (这个是和 C++ 不同的地方。在 C++ 里 vector 是这样工作的 php array C++ vector)

// 术语表
// internal, copy-on-write 写时复制（copy on write）
// https://stackoverflow.com/a/9740541 美好一课
// PHP 的 COW 对内存进行优化 https://segmentfault.com/a/1190000014024336 (趣味知识) zval 提供了写时复制的支持

// internal 故事
// (反正他们就是那么说的)
// 在 internal 里 php 对数组进行了优化，即使传入数组时候和其它语言一样是 pass by reference 但一旦修改就会触发 copy on write 所以更新过的数组是传不出来的，故而 数组表现得像 pass by value 一样
// PHP
// $arr1 = [1,2,3,4];
// $arr2 = $arr1;
// $arr2[0] = 99; <- 触发 copy on write
// var_export($arr2); // [99,2,3,4]
// var_export($arr1); // [1,2,3,4]
