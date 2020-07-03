<?php
// 23.
// int型とboolean型を渡し boolean型がtrueなら　int型を1プラスする　falseなら1マイナスする関数を作成してください
ini_set('display_errors', 1);
function markScore($int, $bool)
{
    if ($bool === true) {
        $int++;
    } else {
        $int--;
    }
    return $int;
}
$int = 100;
$bool = false;
echo markScore($int, $bool) . PHP_EOL;
// 24.
// int型とString型を渡しそのint型の数値の回数分　型の内容Stringを出力する関数を作成してください
// (int型が0以下の場合　「範囲外の入力値です」と出力してください
function WakeUp($int, $str)
{
    if ($int <= 0) {
        echo "範囲外の入力値です";
        return;
    }
    for ($i = 0; $i < $int; $i++) {
        echo $str . PHP_EOL;
    }
}
$int = 10;
$str = "起きて！";

WakeUp($int, $str);
// ★★★★★★★★★★★★★★★
// せっかくですので、ここで追加問題といきますね。再帰関数の問題です。
// 設問13ですが、現状では２つの変数が固定値となっていますので、これをランダムな数字が代入された２つの値を返すような関数を作成してみましょう。
// また２つの変数の差がマイナスになる場合は、再度、同じ関数を呼び、再代入するような関数を作成してみてください。
// 13. 条件式
// 整数型の２つの変数を宣言してください。
// 上記で宣言した２つの変数の内、1つ目を2つ目で引いた数字が偶数、奇数、0で「偶数です」「奇数です」「0です」と表示させるような条件式を書いてください。
// よろしければ、トライしてみてください＾＾
function randNumbar($min, $max)
{
    // $num_1 = rand($min, $max);
    // $num_2 = rand($min, $max);
    // $diff = $num_1 - $num_2;
    // if ($diff < 0) {
    //     return randNumbar($min, $max);
    // }
    // return $diff;
    //関数の中身を$num_1,$num_2を返り値にする処理で修正しました
    // $num_1 = ç;
    // $num_2 = mt_rand($min, $max);

    // if ($num_1 - $num_2 < 0) {
    //     return randNumbar($min, $max);
    // }

    // return [$num_1, $num_2];
    $nums = [
        mt_rand($min, $max),
        mt_rand($min, $max),
    ];
    if ($nums[0] - $nums[1] < 0) {
        return randNumbar($min, $max);
    }
    return $nums;
}
$min = 1;
$max = 100;
list($num_1, $num_2) = randNumbar($min, $max);
$diff = $num_1 - $num_2;
echo sprintf("%d - %d = %d", $num_1, $num_2, $diff) . PHP_EOL;
if ($diff === 0) {
    echo "0です" . PHP_EOL;
} elseif ($diff % 2 === 0) {
    echo "偶数です" . PHP_EOL;
} else {
    echo "奇数です" . PHP_EOL;
}
