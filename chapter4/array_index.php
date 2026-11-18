<?php
$fruits = ["apple", "banana", "cherry", "date", "elderberry"];
# array_slice()関数を使って、配列の一部を取得してJSON形式で出力
# ($fruits, 1, 3)は$fruits配列のインデックス1から開始して、3つの要素を取得する（開始位置、要素数）
echo json_encode(array_slice($fruits, 1, 3)) . PHP_EOL;
