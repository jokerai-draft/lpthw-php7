
type casting

$v = (int)$v;     // preferred
$v = intval($v);

print_r(var_export((int)0, true) . "\n"); #=> 0

参考
https://wiki.phpbb.com/Best_Practices:PHP

$v ??= -1;
$v = (int)$v;
