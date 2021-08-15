<?php declare(strict_types=1);

class Blueberry
{
    public $taste;
    public static int $counter = 0; // should be private

    public function __construct($taste = "(default taste)") {
        $this->taste = $taste;
        ++static::$counter;
    }

    public function __toString() {
        return "Blueberry ($this->taste)";
    }
}

// 参考 为什么 在非静态环境 使用 静态环境里专用的自我指代词 static
// https://www.php.net/manual/en/language.oop5.static.php#104823
