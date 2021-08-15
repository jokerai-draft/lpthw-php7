<?php

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
