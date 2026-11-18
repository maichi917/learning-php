<?php
$fruits = ["apple", "banana"];
echo json_encode($fruits) . PHP_EOL;
# 配列の末尾に要素を追加する
array_push($fruits, "cherry");
echo json_encode($fruits) . PHP_EOL;

$fruits = ["apple", "banana"];
echo json_encode($fruits) . PHP_EOL;
# 配列の先頭に要素を追加する
array_unshift($fruits, "cherry");
echo json_encode($fruits) . PHP_EOL;
