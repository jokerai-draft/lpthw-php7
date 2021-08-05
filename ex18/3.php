<?php

// 作用域视角
// 作用域的范围里是否有最新值

// 函数作用域


// 1
// https://www.php.net/manual/en/functions.arguments.php#functions.arguments.by-reference

function add_some_extra(&$string) // 如果不加 & 则不会影响到函数体作用域外
{
    $string .= 'and something extra.';
}
$str = 'This is a string, ';
add_some_extra($str);
echo $str;    // outputs 'This is a string, and something extra.'
echo "\n";


function swap(&$num1, &$num2){
    $tmp = $num2;
    $num2 = $num1;
    $num1 = $tmp;
}
$a = 3;
$b = 13;
print_r("a: $a, b: $b \n");
swap($a, $b);
print_r("a: $a, b: $b \n");
