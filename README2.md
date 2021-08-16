#
可靠性: 速度、准确性

第一次准确性的追求的实现(难度很低)(追求准确获取函数集)是在静态环境
示例 ex40/proj5/SlimLib.php
示例 ex43/example1/Lib.php
示例 ex58/env4/case1/Lib.php # build with late binding in mind

第二次准确获取函数集是简单派生链
示例 ex40 里的全部例子
示例 ex43 里的全部例子
示例 ex58/env4 ex58/env3 里的所有例子 # build with late binding in mind

第三次准确性的追求是非静态环境的派生链
示例 ex58/env2


说明
对(从父类写到子类的)简单派生链, 对基准类(在此被看作潜在父类)函数体里, 将类的静态属性标记 self (self::$instances)是 OK 的 作为自我指代功能; 如果想 既有自我指代功能 同时为 late binding 留下空间, 那么可以用 static 替换 self  (static::$instances)
