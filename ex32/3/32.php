<?php

// 一种全新的数据结构

$id = 3;
// $addressBook
$dummyEntities = [
    ['name' => 'Alice', 'phone' => '000-000-0000', 'email' => 'alice@gmail.com', 'id'=>1,],
    ['name' => 'Bill', 'phone' => '510-422-6710', 'email' => 'bill@gmail.com', 'id'=>2,],
    ['name' => 'Cindy', 'phone' => '513-739-2025', 'email' => 'cindy@gmail.com', 'id'=>3,],
];
$found = array_filter($dummyEntities, function($entity) use ($id) { return (int)$entity['id'] === (int)$id; });
if (count($found) === 1) {
    $entity = $found[array_key_last($found)];
}

print_r($entity);

print_r($found); // 未切片, 需要 $entity = $found[array_key_last($found)] 切片
