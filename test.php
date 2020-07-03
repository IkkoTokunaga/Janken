<?php

$input_line = trim(fgets(STDIN));
$pull = str_replace(" ","", $input_line);
//空白を消す
$pull = str_split($pull);
//文字を分割
$pull = explode(" ", $input_line);
//空白で文字を分割
$pull = array_map('intval', explode(" ", $input_line));
//数値に直して空白で分割  
while ($input_line = trim(fgets(STDIN))) {
    $arr[] = $input_line;
    }
//標準入力を全ての行取得
