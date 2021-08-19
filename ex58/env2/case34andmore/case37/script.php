<?php declare(strict_types=1);

require 'autoload.php';

$pdh = null;
$dsn = 'mysql:dbname=testdb;host=127.0.0.1';
$user = 'dbuser';
$password = 'dbpass';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$db = new DbMysql($pdh);

$db->select('users', array('id', 'name'));

// https://www.php.net/manual/zh/pdo.construct.php
