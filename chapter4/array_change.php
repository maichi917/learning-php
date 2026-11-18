<?php
$fruits = ["apple", "banana", "cherry"];
echo json_encode($fruits) . PHP_EOL;
# 配列のインデックス1の要素を変更する
$fruits[1] = "avocado";
echo json_encode($fruits) . PHP_EOL;
