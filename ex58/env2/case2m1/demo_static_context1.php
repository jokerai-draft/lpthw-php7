<?php
class A {
    public static function foo() {
        echo "A's foo() called ... ";
        static::who();
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}

class B extends A {
    public static function test() {      // <---- 静态环境
        A::foo(); // scope 是 A 域, who 调用到了 最底下干活儿的 即 A
        parent::foo(); // parent is A, 收缩域到 A域, who 调用到了 最底下干活儿的 即 C
        self::foo(); // self 是 B, 收缩域到 B域, B里有 foo() copied from A, who 调用到了 最底下干活儿的C ... ******参考
        static::foo(); // 收缩域到 B域, B里有 foo() ...
        // 以上是第一种看法 通过 "收缩域法" 找到函数集; 可以看到 self 和 static 都是 本域, A 和 parent 都是收缩到别的域
        // 第二种看法是, 只有 A::foo() 对 callee 作限制了 其它 forwarder 都没有对 callee 作限制, 在此基础上, callee 可以调用到各自眼中的 最底下干活儿的
    }
    // public static function foo() { echo "B's foo() called. "; static::who(); } // 拦截

    public static function who() {
        echo __CLASS__."\n";
    }
}
class C extends B {
    public static function who() {
        echo __CLASS__."\n";
    }
}

C::test();

// 快速判断要点: 先画一次调用的 scope, 让 LEFT::xx 确定收缩域到哪 (收缩域到 LEFT域), 然后找函数(根据所谓的函数查找机制,找的时候 是把函数看作是本域函数:已经从域外拷贝到了本域里 直接用即可), 最后看结果

// https://www.php.net/manual/zh/language.oop5.late-static-bindings.php

// ******参考
// https://www.php.net/manual/en/language.oop5.late-static-bindings.php#122664
