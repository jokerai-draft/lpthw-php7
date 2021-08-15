<?php
// https://www.bookstack.cn/read/LearnPython3TheHardWay/spilt.47.learn-py3.md

class Animal { }

class Dog extends Animal
{
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
}

class Cat extends Animal
{
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
}

class Person
{
    protected $name;
    public $pet;
    public function __construct($name) {
        $this->name = $name;
        $this->pet = null;
    }
}

class Employee extends Person
{
    protected $salary;
    public function __construct($name, $salary) {
        parent::__construct($name);
        $this->salary = $salary;
    }
}

class Fish { }

class Salmon extends Fish { }

class Halibut extends Fish { }

$rover = new Dog("Rover");

$satan = new Cat("Satan");

$mary = new Person("Mary");

$mary->pet = $satan;

$frank = new Employee("Frank", 120000);

$frank->pet = $rover;

$flipper = new Fish();

$crouse = new Salmon();

$harry = new Halibut();

// 参考
// https://stackoverflow.com/questions/6456939/php-accessing-parent-class-variable
