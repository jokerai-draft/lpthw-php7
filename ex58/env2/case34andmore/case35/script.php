<?php declare(strict_types=1);
// Report all PHP errors
error_reporting(-1);

require 'autoload.php';

function test1() {
    $s1 = new Rectangle(3, 4);
    var_dump($s1);
    echo $s1;
    echo "\n";
    print_r(var_export($s1->isSquare(), true) . "\n");
    echo $s1->reportArea();


    $s1 = new Rectangle(3, 4);
    $s2 = new Rectangle(10, 12);
}
// test2();
// $s = new Shape();

function test2() {
    $s1 = new Rectangle(10, 12);
    $s2 = new Square(5);
    $s3 = new Circle(3);

    $shapes = [$s1, $s2, $s3];

    foreach ($shapes as $shape) {
        // echo $shape;

        // 各类共有方法
        echo "$shape: area, $shape->area; perimeter, $shape->perimeter" . "\n";
        echo $shape->reportArea();
        echo "\n";

        // 某类独有方法
        if (get_class($shape) === "Rectangle") {
            echo "   Is Square: " . var_export($shape->isSquare(), true) . ", " . "Diagonal: $shape->diagonal" . "\n";
        }

        if (get_class($shape) === "Square") {
            echo "   Diagonal: $shape->diagonal" . "\n";
        }
    }
}


// 关于类型转换
// php object convert to class - Google 搜索
// https://stackoverflow.com/questions/3243900/convert-cast-an-stdclass-object-to-another-class

// C# 做到了类型转换
// 在我看来是扫描函数集之前的一个提前判断作用

// 关于 why undeclared variable can work
// https://stackoverflow.com/questions/25478628/is-it-recommend-that-a-php-classes-variables-are-declared-or-undeclared
// https://stackoverflow.com/questions/1086494/when-should-i-declare-variables-in-a-php-class
