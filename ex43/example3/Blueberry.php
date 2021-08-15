<?php declare(strict_types=1);

class Blueberry
{
    public static int $counter = 0;
    public ?string $taste = null;

    public function __construct(?string $taste = null) {
        $this->taste = $taste;
        ++self::$counter;
    }

    public function __toString() {
        return "Blueberry ($this->taste)";
    }
}

// 参考
// https://stackoverflow.com/questions/60934321/can-i-declare-a-typed-property-so-that-it-accepts-a-null-value-as-well
// 在此基础上可以类似 public function __construct(?string $description = null) { }
//                    public function __construct($description = null) { }
