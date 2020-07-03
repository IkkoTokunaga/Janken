<?php

// 13. 条件式
// 整数型の２つの変数を宣言してください。
// 上記で宣言した２つの変数の内、1つ目を2つ目で引いた数字が偶数、奇数、0で「偶数です」「奇数です」「0です」と表示させるような条件式を書いてください。
$num01 = 10;
$num02 = 10;
$num03 = $num01 - $num02;

if ($num03 === 0) {
    echo "「0です」";
} elseif ($num03 % 2 === 1) {
    echo "「奇数です」";
} else {
    echo "「偶数です」";
}
echo PHP_EOL;
// 14. FizzBuzz
// 1 ~ 100の数字をfor文でループしてください。
// ただし3の倍数のときは数の代わりに｢Fizz｣と、5の倍数のときは｢Buzz｣、3と5両方の倍数の場合には｢FizzBuzz｣と出力すること。
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz" . PHP_EOL;
        continue;
    }
    if ($i % 3 === 0) {
        echo "Fizz" . PHP_EOL;
        continue;
    }
    if ($i % 5 === 0) {
        echo "Buzz" . PHP_EOL;
        continue;
    }
    echo $i . PHP_EOL;
}
echo PHP_EOL;
// 15. switch文
// 整数型の２つの変数を宣言してください。
// 上記で宣言した２つの変数の内、1つ目を2つ目で引いた数字が偶数、奇数、0で「偶数です」「奇数です」「0です」と表示させるような条件式を書いてください。
$num01 = 10;
$num02 = 6;
$num03 = $num01 - $num02;

switch ($num03) {
    case 0:
        echo "「0です」";
        break;
    case $num03 % 2 === 1:
        echo "「奇数です」";
        break;
    case $num03 % 2 === 0:
        echo "「偶数です」";
        break;
}
