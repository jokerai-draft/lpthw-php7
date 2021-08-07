<?php

// 一种老旧的数据结构

$arr = ["Monday", "Tuesday", "Wednesday", ];

if (in_array("Wednesday", $arr, true)) {
    echo "bingo \n";
    echo "Wednesday at #" . array_search("Wednesday", $arr);
}

// 参考
// https://code.tutsplus.com/tutorials/working-with-php-arrays-in-the-right-way--cms-28606
// https://code.tutsplus.com/courses/php-fundamentals/lessons/creating-a-dataprovider-class

