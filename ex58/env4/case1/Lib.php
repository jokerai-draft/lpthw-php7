<?php declare(strict_types = 1);
class Lib
{
    public static $version;
    // 不需要 public function __construct() {}

    public static function init() {
        if (static::$version) return;
        static::$version = "0.0.1";
    }

    public static function appendStarsTo($str) {
        return $str . str_repeat("*", 10);
    }
    public static function getDate() {
        static::sayHi();
        return (new \DateTime())->format('Y-m-d H:i:s');
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
