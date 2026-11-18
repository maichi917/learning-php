<?php
$fruits = ["apple", "banana", "cherry"];

# fruits を fruit として1個ずつ取り出す
foreach ($fruits as $fruit) {
    echo $fruit . PHP_EOL;
}

$fruits = ["apple", "banana", "cherry"];

# indexを取得して表示させる
foreach ($fruits as $index => $fruit) {
    echo "{$index}: {$fruit}\n";
}
