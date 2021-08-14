#

序列化
serialize

优点
可以记录标量类型变量的 type value
可以记录复合类型变量的 class, private property, public property

缺点
不可以记录复合类型变量的 static property ，也就是说 这个信息(若不附着到实例对象 即 不赋值给实例变量)会丢失

弱点
被误解为 无法进行 strictness compare ，实际上 这样到结果是因为上游污染 (变量类型隐式转换) 在进入到 serialize 之前就发生了

疑点1
// 这说明 serial 可以覆盖到 private property 但是无法覆盖到 static property
// php serialize static properties - Google 搜索

疑点2
// 所谓到 object compare
https://github.com/eloquent/equality
https://www.librebyte.net/en/programming/how-to-compare-objects-in-php/


作为一种数据保存的办法，后续可能的问题
unserialize
https://medium.com/swlh/diving-into-unserialize-3586c1ec97e
