<?php
$numbers = [1, 2, 2, 3, 4, 4, 5, 5, 5];
# array_uniqueで重複を削除し、array_valuesでインデックスを振り直す
$unique_numbers = array_values(array_unique($numbers));
echo json_encode($numbers) . PHP_EOL;
echo json_encode($unique_numbers) . PHP_EOL;

$numbers = [1, 2, 2, 3, 4, 4, 5, 5, 5];
# 空の配列を用意
$unique_numbers = [];
# 配列の中にない数字だったら追加する
foreach ($numbers as $number) {
    if (!in_array($number, $unique_numbers)) {
        $unique_numbers[] = $number;
    }
}

echo json_encode($numbers) . PHP_EOL;
echo json_encode($unique_numbers) . PHP_EOL;
