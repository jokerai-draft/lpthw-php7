<?php declare(strict_types=1);
/*
Blueberry
使用办法
$berry = new Blueberry();
Blueberry::$counter;
*/

class Blueberry
{
    public static int $counter = 0;
    public ?string $taste = null;

    public function __construct($taste = "(default taste)") {
        $this->taste = $taste;
        ++self::$counter;
    }

    public function __toString() {
        return "Blueberry ($this->taste)";
    }
}



// (https://www.php.net/manual/zh/language.oop5.cloning.php#在实例之间共享类变量静态变量)

// 参考 何时用 nullable variable
// https://stackoverflow.com/questions/14097258/is-a-property-default-value-of-null-the-same-as-no-default-value

// 经典报错 PHP Fatal error:  Uncaught Error: Typed property must not be accessed before initialization
// https://stackoverflow.com/questions/59265625/why-i-am-suddenly-getting-a-typed-property-must-not-be-accessed-before-initiali

// 只读属性
// readonly property
// https://stackoverflow.com/questions/2343790/how-to-implement-a-read-only-member-variable-in-php

/* 构造函数
public ?string $taste = null;
public function __construct(?string $taste = null) {
    $this->taste = $taste;
    ++self::$counter;
}
public function __construct(?string $taste = "(default taste)") { // 感觉没啥必要
    $this->taste = $taste;
    ++self::$counter;
}
public function __construct($taste = "(default taste)") {
    $this->taste = $taste;
    ++self::$counter;
}
*/
