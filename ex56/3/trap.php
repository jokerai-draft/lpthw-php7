
陷阱
convert number to string
// print_r((string)3.1 . "\n"); // 3.1
// print_r((string)3.100 . "\n"); // 3.1
为什么是陷阱？因为它没考虑是否保护无效零位，它没保持小数位数 (你没让人家保留位数 没显式保护无效零位)，直接卡掉小数的无效零位，返回字符串

convert number to string with format
用 sprintf ， format 一次 (显式指定小数位数  显式保护无效零位)，返回字符串
// print_r(sprintf("%.3f", 3.100) . "\n"); // 3.100
// print_r(sprintf("%.6f", 3.100) . "\n"); // 3.100000
print_r(var_export(sprintf("%.2f", 12.01) === sprintf("%.5f", 12.01000), true) . "\n"); // false
print_r(var_export(sprintf("%.5f", 12.01000) === sprintf("%.5f", 12.01000), true) . "\n"); // true
print_r(var_export(sprintf("%.2f", 12.01) === sprintf("%.2f", 12.01000), true) . "\n"); // true

陷阱
convert string to number
为什么是陷阱？这是没有通解的
https://stackoverflow.com/questions/8529656/how-do-i-convert-a-string-to-a-number-in-php
