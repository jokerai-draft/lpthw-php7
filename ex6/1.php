<?php

// php string placeholder

// https://www.bookstack.cn/read/LearnPython3TheHardWay/spilt.11.learn-py3.md

// https://stackoverflow.com/a/36781566
// https://www.php.net/manual/en/function.strtr.php#117169

// https://stackoverflow.com/questions/15773349/replacing-placeholder-variables-in-a-string

// 如果要被填入的 placeholder 是允许 boolean 填入

$hilarious = false;
$joke_evaluation = "Isn't that joke so funny?! :isFunny.";
$strParams = [":isFunny" => var_export($hilarious, true)];
print_r(strtr($joke_evaluation, $strParams));

print_r("\n");

// 如果要被填入的 placeholder 是允许 string 填入

$ans1 = "42 as the ultimate answer of the universe";
$ans2 = "The Republic of South Africa is in Africa";
$line = "so the answer is: :ans";
$strParams = [":ans" => $ans2];
print_r(strtr($line, $strParams));


// ...
echo "\n";
$joke_evaluation = "Isn't that joke so funny?! :isFunny.";
$strParams = [":isFunny" => var_export($hilarious, true)];
$processed = str_replace(':isFunny', "falsy", $joke_evaluation);
print_r($processed . "\n");
