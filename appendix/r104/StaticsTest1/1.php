<?php
require_once 'Math.php';

class Test {
    public static $state;

    function test1() {
        self::$state = Math::getState();
        print_r(self::$state);
    }
    function test2() {
        $state = Math::updateState();
    }
    function test3() {
        // self::$state = Math::getState(); trigger to get outdated data
        print_r(self::$state);
    }

}

class Test2 {
    static function bar() {
        print_r("\n");
        print_r('===');
        print_r(Math::getState());
        print_r('=====');
        print_r("\n\n");
    }
}

function test1() {
    $t1 = new Test();
    $t1->test1();
    $t1->test2();
    $t1->test1();
    $t1->test3();
}
function test2() {
    $t1 = new Test();
    $t1->test1();
    $t1->test2();
    // $t1->test1();
    $t1->test3(); // outdated state
}
function quietlyDone() {
    Math::updateState();
}
function test3() {
    $t1 = new Test();
    $t1->test1();
    $t1->test2();
    // $t1->test1();
    $t1->test3(); // outdated state
    $t1->test1();
    $t1->test3(); // new state, since in `$t1->test1();`  self::$state get updated
}
test2();

Test2::bar();
quietlyDone();
quietlyDone();
Test2::bar(); // 说明 scope 的确是脚本生命周期

require_once '2.php';
anotherFileTest1();

anotherFileQuietlyDone();
anotherFileQuietlyDone();

Test2::bar(); // 说明跨文件调用是可以的, 只要不出当前脚本生命周期

quietlyDone();
echo "\n ----- ----- \n";
test2(); // 说明 statics 数据变化有积累效应, 最好在 "最上层" 使用

