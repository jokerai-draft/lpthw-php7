
控制流

影响控制流(稳定)的因素
- 判断语句
- 打印语句 (debug)

(2)打印语句
打印语句可以方便 debug ，它本身不影响判断型控制
打印出来的都是(已经走完控制流的)字符串了

(1)判断语句
IF 语句只有两个判断，就是 true 如何 false 如何
IF 语句会把所有的表达式(Expression) "尝试" 解读为 false 然后再运行
 null => false 等于是 "if (null){...}" 和 "if (false){...}" 效果一样

IF 语句的隐式转换
if ((bool) Expression){...}
这个是会影响控制流的




[1]:
(已经走完控制流的)字符串的打印
print_r("Does the output file exist? " . (var_export(file_exists($tofilename), true)) . "\n");
print_r(var_export(true, true) . "\n");
print_r(var_export(false, true) . "\n");

$bool = (bool)null;
print_r(var_export($bool, true) . "\n");
if ($bool){...}

[2]
真值表的生成1
$bool = (bool)null;
print_r(var_export($bool, true) . "\n"); #=> false 这里对野指针的使用是：允许 if 判断语句去读取野指针并作一次隐式转换 (如果在 java 里 如果没有显式转化为布尔值(if Expression 只能接受布尔值 而野指针不是布尔值)则会报错)
$bool = (bool)false;
print_r(var_export($bool, true) . "\n"); #=> false
$bool = (bool)true;
print_r(var_export($bool, true) . "\n"); #=> true

真值表的生成2
$bool = (bool)null;
print_r(var_export($bool, true) . "\n"); #=> false
$bool = (bool)is_null(null);
print_r(var_export($bool, true) . "\n"); #=> true

真值表的生成3
$rh = '';
$bool = (bool)is_null($rh);
$bool = is_null($rh);
print_r(var_export($bool, true) . "\n"); #=> false
// is_null($var) 用于判断一个变量的内存是否释放了
// is_null($var) 用于野指针的判断 ✓

[3]
真值表的生成1
$bool = (bool)is_string("hi");
$bool = is_string("hi");
print_r(var_export($bool, true) . "\n"); #=> true
// is_string($v) 用于判断一个变量的数据类型 (而不关心变量具体是什么字符串)

真值表的生成2
$bool = (bool)is_int(300);
$bool = is_int(300);
print_r(var_export($bool, true) . "\n"); #=> true
// is_int($v) 用于判断一个变量的数据类型

真值表的生成3
$bool = (bool)is_float(30.0);
$bool = is_float(30.0);
print_r(var_export($bool, true) . "\n"); #=> true
// is_float($v) 用于判断一个变量的数据类型

变量的数据类型判断
is_int
is_float
is_bool
is_string
is_array
is_object

空指针判断 野指针判断
is_null

