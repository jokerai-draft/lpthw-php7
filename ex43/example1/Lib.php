<?php
/*
Lib 静态类
使用办法
Lib::init();
Lib::getDate();
Lib::getCallCounter();
Lib::$version
(静态环境, 此时 static 函数里的 self 可以用 static 代替)
*/
class Lib
{
    private static int $callCounter = 0;
    public static ?string $version = null;
    // 不需要 public function __construct() {}

    public static function init() {
        if (self::$version) return;
        self::$version = "0.0.1";
    }

    public static function appendStarsTo($str) {
        ++self::$callCounter;
        return $str . str_repeat("*", 10);
    }
    public static function getDate() {
        ++self::$callCounter;
        return (new \DateTime())->format('Y-m-d H:i:s');
    }
    public static function getCallCounter() {
        return ++self::$callCounter;
    }
}

// 参考
// https://code.tutsplus.com/courses/php-fundamentals/lessons/writing-a-data-abstraction-layer


// lib 可以用在哪
// https://code.tutsplus.com/courses/php-fundamentals
// https://code.tutsplus.com/courses/php-fundamentals/lessons/creating-a-dataprovider-class -- 这里已经单独脱离出一个 view 层了

// https://code.tutsplus.com/courses/php-fundamentals/lessons/writing-a-data-abstraction-layer 明显用到了静态类


/*
写法一
class Lib
{
    private static int $callCounter = 0;
    public static ?string $version = null;
    // 不需要 public function __construct() {}

    public static function init() {
        echo self::$version;
        if (self::$version) return;
        self::$version = "0.0.1";
    }

    public static function appendStarsTo($str) {
        ++self::$callCounter;
        return $str . str_repeat("*", 10);
    }
    public static function getDate() {
        ++self::$callCounter;
        return (new \DateTime())->format('Y-m-d H:i:s');
    }
    public static function getCallCounter() {
        return ++self::$callCounter;
    }
}

写法二
class Lib
{
    private static int $callCounter = 0;
    public static $version;
    // 不需要 public function __construct() {}

    public static function init() {
        echo self::$version;
        if (self::$version) return;
        self::$version = "0.0.1";
    }

    public static function appendStarsTo($str) {
        ++self::$callCounter;
        return $str . str_repeat("*", 10);
    }
    public static function getDate() {
        ++self::$callCounter;
        return (new \DateTime())->format('Y-m-d H:i:s');
    }
    public static function getCallCounter() {
        return ++self::$callCounter;
    }
}
*/
