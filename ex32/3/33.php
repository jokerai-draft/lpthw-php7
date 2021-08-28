<?php

// 一种全新的数据结构

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
