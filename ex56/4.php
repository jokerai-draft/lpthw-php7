
字符串的获取
在不规则情况下 获取特定格式的字符串

(可以是直接数据类型转换 之前有提过的，也可以是 赋值法-判断并赋值，也可以是 extract，可以是 格式过滤器 )
                            ^较为规则        ^不规则

例如 extract
// Extract a single (unsigned) integer from a string
// https://stackoverflow.com/questions/6278296/extract-a-single-unsigned-integer-from-a-string

例如 格式过滤器
sprintf , float formatter
$r = sprintf("%.2f", $d);

