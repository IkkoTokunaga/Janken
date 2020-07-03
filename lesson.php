<?php

// 1. 基本的な変数の宣言
// 以下の指定された条件に合うような値を変数に代入して宣言してください。

// ・整数（int） $number: 5
$number = 5;

// ・文字列（string） $text: test
$text = "test";

// ・論理型（boolean） $flag: true
$flag = true;

// ・null型 $test: null
$test = null;

// 2. 基本的な計算
// 整数型の２つの変数を宣言してください。
$num_1 = 100;
$num_2 = 3;

// 2つの変数を用いて、　足す、引く、かける、割る、割った余りを出力してください。
echo $num_1 + $num_2 . PHP_EOL;
echo $num_1 - $num_2 . PHP_EOL;
echo $num_1 * $num_2 . PHP_EOL;
echo $num_1 % $num_2 . PHP_EOL;

// 3. 条件式とboolean(論理型)について
// 初期値がfalseである論理型の変数を宣言してください。
$value = false;

// 問題2で宣言した２つの変数を足した結果が偶数であれば、論理型の変数にtrueを代入してください。
// 4. 条件式
if(($num_1 + $num_2) % 2 === 0) {
    $value = true;
}

// 設問3のboolean型の変数を利用した条件式を作成し、以下のように出力してください。
// ・偶数なら..... 「偶数です」
// ・奇数なら.....「奇数です」
if($value === true) {
    echo '偶数です' . PHP_EOL;
} else {
    echo '奇数です' . PHP_EOL;
}
?>