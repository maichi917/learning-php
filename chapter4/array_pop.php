<?php
$fruits = ["apple", "banana", "avocado"];
echo json_encode($fruits) . PHP_EOL;
# 配列の末尾の要素を削除する
array_pop($fruits);
echo json_encode($fruits) . PHP_EOL;

$fruits = ["apple", "banana", "avocado"];
echo json_encode($fruits) . PHP_EOL;
# 配列の先頭の要素を削除する
array_shift($fruits);
echo json_encode($fruits) . PHP_EOL;

$fruits = ["apple", "banana", "avocado"];
echo json_encode($fruits) . PHP_EOL;
# 配列の特定の要素を削除する
unset($fruits[1]);
echo json_encode(array_values($fruits)) . PHP_EOL;