<?php

class Song
{
    private $lyrics;
    public function __construct($lyrics) {
        $this->lyrics = $lyrics;
    }
    public function sing_me_a_song() {
        $r = "";
        foreach ($this->lyrics as $line) {
            $r .= $line . "\n";
        }
        print_r($r);
    }
}

// https://www.php.net/manual/zh/language.oop5.cloning.php
// https://www.php.net/manual/en/language.oop5.object-comparison.php
// https://www.codecademy.com/learn/learn-php/modules/classes-and-objects-in-php
// https://www.phptutorial.net/php-oop/php-constructors/
// https://www.phptutorial.net/php-oop/php-destructor/

// 报错记录
// protected 有何后果
// php protected private - Google 搜索
// https://www.php.net/manual/zh/language.oop5.visibility.php
// https://stackoverflow.com/questions/4361553/what-is-the-difference-between-public-private-and-protected

// 报错记录
// 初始化
// php multiple constructor - Google 搜索
// https://stackoverflow.com/questions/1699796/best-way-to-do-multiple-constructors-in-php

// 实例
// https://code.tutsplus.com/courses/php-fundamentals
// https://www.codecademy.com/courses/learn-php

// 报错记录
// parent constructor
// https://stackoverflow.com/questions/1557608/how-do-i-get-a-php-class-constructor-to-call-its-parents-parents-constructor


