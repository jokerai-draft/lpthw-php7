<?php

class SlimLib
{
    private static int $callCount = 0;

    // 不需要 public function __construct() {}

    public static function appendStarsTo($str) {
        ++self::$callCount;
        return $str . str_repeat("*", 10);
    }
    public static function getDate() {
        ++self::$callCount;
        return (new \DateTime())->format('Y-m-d H:i:s');
    }
    public static function getCallCount() {
        return ++self::$callCount;
    }
}

// 参考
// https://code.tutsplus.com/courses/php-fundamentals/lessons/writing-a-data-abstraction-layer

