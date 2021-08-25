<?php

require_once '1.php';

function thatTest1() {
    $state = Math::getState();
    echo "\n ========= \$state =========== \n";
    print_r($state); // 得到最新 state
    echo "\n ==================== \n";
}

thatTest1();

// 说明 statics 数据变化有积累效应, 最好在 "最上层" 使用. 下层提供的数据是没意义的过程数据, 其数据切片都是过期数据!

