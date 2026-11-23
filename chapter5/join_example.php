<?php
$words = ["Hello", "world", "this", "is", "PHP"];
# joinで配列の要素を結合する
$joined_string = join(" ", $words);
echo json_encode($words) . PHP_EOL;
echo json_encode($joined_string). PHP_EOL;
