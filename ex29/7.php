<?php

// 寻找常数

define("MAXSIZE", 100);
define("ANIMALS", ["dog", "bird", "dinosaur"]);
echo MAXSIZE;
echo constant("MAXSIZE"); // same thing as the previous line
