<?php

// 一种全新的数据结构

// two dimensional array
// https://stackoverflow.com/questions/1811100/how-do-i-declare-a-two-dimensional-array/1811121#1811121

$id = 3;

$contacts = [
    ['name' => 'Alice', 'phone' => '000-000-9999', 'email' => 'alice@gmail.com', 'id'=>1,],
    ['name' => 'Bill', 'phone' => '510-422-6710', 'email' => 'bill@gmail.com', 'id'=>2,],
    ['name' => 'Cindy', 'phone' => '513-739-2025', 'email' => 'cindy@gmail.com', 'id'=>3,],
    ['name' => 'Dave', 'phone' => '431-129-3011', 'email' => 'dave@gmail.com', 'id'=>4,],
    ['name' => 'Emma', 'phone' => '513-711-2921', 'email' => 'cindy@gmail.com', 'id'=>5,],
];

print_r(count($contacts));
deleteById($id, $contacts); // delete item, remove item, destory item
print_r(count($contacts));

function deleteById($id, &$contacts) {
    foreach ($contacts as $k => $v) {
        if ((int)$v['id'] === (int)$id) { unset($contacts[$k]); }
    }
}

print_r($contacts);

// v2ex.com/t/774968?p=1#r_10497058 神奇的 Javascript，谁能告诉我为什么

# 注意 对于数组, array_walk 无法删除元素 (unset with key)。如果想删除数组元组, 那么用 foreach 按 $v 找到元素并 按 $k unset

