
(静态环境, 此时 static 函数里的 self 可以用 static 代替)

在非静态环境, 如果把当前类看作一个潜在的父类, 那么需要考虑如何为 late static binding 留下空间
在非静态环境, 如果不把当前类看作一个潜在的父类, 那么它只需要顾自己 那么用 self 就 OK 作为多个实例共享的类变量

参考
ex58/env2/case31
ex58/env2/case32
