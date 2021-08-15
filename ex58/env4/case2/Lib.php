<?php declare(strict_types = 1);
class Lib
{
    private static $callCounter = 0;
    public static $version;
    // 不需要 public function __construct() {}

    public static function init() {
        if (static::$version) return;
        static::$version = "0.0.1";
    }

    public static function appendStarsTo($str) {
        ++static::$callCounter;
        return $str . str_repeat("*", 10);
    }
    public static function getDate() {
        ++static::$callCounter;
        static::sayHi();
        return (new \DateTime())->format('Y-m-d H:i:s');
    }
    public static function getCallCounter() {
        return ++static::$callCounter;
    }

    private static function sayHi() {
        // echo "hi (current ver: {static::$version}) \n";
        $v = static::$version;
        echo "hi (current ver: $v) \n";
    }
    public static function getVersion() {
        return static::$version;
    }
}

// 参考 静态环境里专用的自我指代词 static
// https://www.php.net/manual/en/language.oop5.static.php#104823
