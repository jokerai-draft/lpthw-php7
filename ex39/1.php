
array internal
arrays are not implemented as a B-tree, it's a hash table (hashtable 有序映射 散列表 字典 dict hash )
array_key_exists 是寻找 key 是否存在的正确办法，最贴合 array 本身的结构的办法
https://stackoverflow.com/questions/16675753/php-fastest-way-to-handle-undefined-array-key

对比
C# List internal
https://docs.microsoft.com/en-us/dotnet/api/system.collections.generic.list-1
这个可以用 binary search

对比
php array internal
https://learnku.com/articles/33225 php  array  内部结构
https://cloud.tencent.com/developer/article/1579131 一个字典样子的玩意，如何顺序遍历数组元素? 在第一张表里遍历，在第二张表里以 kv 方式获得数组元素
https://www.laruence.com/2009/08/23/1065.html
