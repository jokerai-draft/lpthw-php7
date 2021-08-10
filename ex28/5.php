<?php

// 关于 object clone

// object assign (而非 scalar assign 或 array assign )
// 如果是 assign 那么 两个变量是指向同一个内存块的
// 如果不想让两个变量指向同一个内存块，那么用 clone
// (至少应该用 clone , 更多情况下应该用 recursive clone 做到 php deep copy object 的效果)

// https://stackoverflow.com/a/24956571

// 参考 clone 本身是 shallow copy
// after clone, check the new object: the internal objects of the new object will be references to the same objecs in memory as the internal objects of the original object
// https://www.php.net/manual/zh/language.oop5.cloning.php
// https://stackoverflow.com/questions/2144506/what-is-object-cloning-in-php
