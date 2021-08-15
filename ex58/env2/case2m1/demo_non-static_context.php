<?php
class A {
    private function foo() {
        echo "success!\n";
    }
    public function test() {
        $this->foo(); echo "OK" . "\n";
        static::foo();
    }
}

class B extends A {
   /* foo() will be copied to B, hence its scope will still be there and
    * the call be successful */
}

class C extends A {
    public function foo() {
        /* original method is replaced; the scope of the new one is C */
        echo "success from class C!\n";
    }
}

$b = new B();
$b->test();
echo "\n";
$c = new C();
$c->test();


// https://www.php.net/manual/en/language.oop5.late-static-bindings.php
