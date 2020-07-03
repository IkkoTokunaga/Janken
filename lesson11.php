<?php

// 37,三項演算子
// Integer(整数)の変数を2つ、String(文字列)の変数を1つ宣言してください。
// 2つのint型変数の合計が100未満なら「100未満」、そうじゃなければ「100以上」とString(文字列)に三項演算子(条件演算子)を使って代入して、出力してください。
$num1 = 90;
$num2 = 2;
$sum = $num1 + $num2;
$result = "";

$test = $sum < 100 ? $result = "100未満" : $result = "100以上";
echo $test . PHP_EOL;

// 38,文字列検索
// string型の変数を２つ宣言してください。
// 第二引数のString(文字列)が第一引数に含まれているかどうかのboolean型を返す関数を作成してください。
function searchWord($ward1, $ward2)
{
    $bool = strpos($ward2, $ward1) !== false ? true : false;
    return $bool;
}
$ward1 = "東京";
// $ward2 = "東京スカイツリー";
$ward2 = "スカイツリー";

var_dump(searchWord($ward1, $ward2));
// 39, 標準入力
// PHPファイルはコマンドラインから実行してください。
// 仕様
// 「あなたの名前を教えてください。」出力
// ↓
// 入力 ex) Micael
// ↓
// 「Micaelさん、あなたの年齢は何歳ですか？」出力
// ↓
// 入力 ex) 20
// ↓
// 「Micaelさん（年齢:20）、ご登録ありがとうございます！」出力
// ↓
// プログラム終了
$info = [
    "name" => "",
    "age" => "",
];

echo 'あなたの名前を教えて下さい。' . PHP_EOL;
$name = trim(fgets(STDIN));
var_dump($name);
$info['name'] = $name;

if (!empty($info['name'])) {
    echo $info['name'] . "さん、あなたの年齢は何歳ですか？" . PHP_EOL;
    $age = trim(fgets(STDIN));
    var_dump($age);
    $info['age'] = $age;
}
if (!empty($info['age'])) {
    echo $info['name'] . "さん（年齢:" . $info['age'] . "）、登録ありがとうございます！" . PHP_EOL;
}
