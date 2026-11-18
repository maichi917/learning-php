<?php
$a = true;
$b = false;

# var_export()は変数をPHPコードとして出力する関数
echo var_export($a && $b) . PHP_EOL;
echo var_export($a || $b ) . PHP_EOL;
echo var_export(!$a) . PHP_EOL;
echo var_export(!$b) . PHP_EOL;
