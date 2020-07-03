<?php
// 19, while文 do-while文
// 1000から2000までの間で1の桁が7の数字の最初の数字を求めて出力してください
// for文　while文　do-while文を使ってそれぞれ出力してください

for ($i = 1000; $i <= 2000; $i++) {
    $tail = 7;
    $tailNum = $i % 10;//１０で割った余りが１の桁
    if ($tail === $tailNum) {        
        echo $i . PHP_EOL;
    break;
    }
}

$i = 1000;
while ($i <= 2000) {
    $i++;
    $tail = 7;
    $tailNum = $i % 10;//１０で割った余りが１の桁
    if ($tail === $tailNum) {        
        echo $i . PHP_EOL;
    break;
    }
}

$i = 1000;
do {
    $i++;
    $tail = 7;
    $tailNum = $i % 10;//１０で割った余りが１の桁
    if ($tail === $tailNum) {
        echo $i . PHP_EOL;
    break;
    }
} while ($i <= 2000);

// 20. 関数の基礎
// int型の変数を宣言してください。
// 変数を渡して二乗の整数を返す関数を作成してください
$num = 100;
$factoral = 2;//階乗の数字を変数に代入しました

function factorialing($n, $f) {
    return $n**$f ;//追加,階乗の書き方に変えました
}
echo factorialing($num, $factoral) . PHP_EOL;

// 21. 関数の基礎2
// boolean型を渡すと別のboolean型を返す関数を作成してください
// ex) trueを渡す→falseが返ってくる
$bool = true;

function reverseBool($b) {//関数名を変更して、処理の仕方を変更しました
    // var_dump(!$b) . PHP_EOL;
    if ($b === true) {
        $b = false;
    } else {
        $b = true;
    }
    return $b;
}
var_dump(reverseBool($bool)) . PHP_EOL;

// 22.
// int型とString型の２つの変数を引数で渡すと 「int型:String型」という文字列を返す関数を作成してください
// ※int型,String型は引数で渡してください
// ex)出力例「 5: ああああ」
$number = 100;
$string = "ひゃく";
function IntStr($int, $str) {
    // echo $int . ":" . $str . PHP_EOL;
    echo sprintf("%d: %s", $int, $str) . PHP_EOL;
    //sprintf使ってみました！
}

IntStr($number, $string);
