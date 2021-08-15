<?php
class A {
    public static function foo() {
        static::who(); // <- 一旦找到这里，那么必然会走向 caller class
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}

class B extends A {
    public static function test() {      // <---- 静态环境
        A::foo();
        parent::foo();
        self::foo();
        static::foo();
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}
class C extends B {
    public static function who() {
        echo __CLASS__."\n";
    }
}

C::test(); // A C C C


// self 是 函数定义的位置
// ******参考
// https://www.php.net/manual/en/language.oop5.late-static-bindings.php#122664

// parent, self, static 并不会对 callee 作限制
