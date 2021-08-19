<?php
abstract class Db
{
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    abstract function select($table, $fields);
}

/*
Db driver

php abstract class constructor - Google 搜索

https://stackoverflow.com/questions/14272598/what-is-the-use-of-constructor-in-abstract-class-in-php/14273183#14273183

*/
