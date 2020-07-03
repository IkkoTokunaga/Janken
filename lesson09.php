<?php
//29,
// 5個のString(文字列)の配列を用意し適当な文字を代入してください。
// その2番目の値を出力してください。
// $fruits = [
//     "apple",
//     "grape",
//     "lemon",
//     "peach",
//     "banana",
// ];
// echo $fruits[1] . PHP_EOL;
// 30,
// 10個のInteger(整数)の配列を用意し適当な値を代入してください。
// 添字が偶数番目の合計値と添字が奇数番目の合計値を出力してください。
// $nums = [
//     50,
//     100,
//     50,
//     100,
//     50,
//     100,
//     50,
//     100,
//     50,
//     100,
// ];
// $even = 0;
// $odd = 0;
// foreach ($nums as $index => $num) {
//     if ($index % 2 === 0) {
//         $even += $num;
//     }
//     if ($index % 2 === 1) {
//         $odd += $num;
//     }
// }
// echo $even . PHP_EOL;
// echo $odd . PHP_EOL;
// 31,
// Integer(整数)の配列を渡すと、配列の中身が３乗される関数を作ってください。
// なお、関数の中で引数に必要だと思うvalidationも作成してください。（validationの意味がわからない場合は、お調べください）

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// $nums = [];
// $nums = [3, "banana", 5];
// $nums = [3, 5.55555, 5];
// $nums = 111;

function check($nums)
{
    $error = "";
    if (!is_array($nums)) {
        return $error = "配列ではありません";
    }
    if (empty($nums)) {
        return $error = "配列が空です";
    }
    foreach ($nums as $num) {
        if (!is_int($num)) {
            return $error = "配列には整数を入れて下さい";
        }
    }
}

$error = check($nums);

function factorial($nums, $error)
{
    if (isset($error)) {
        return $error;
    }
    for ($i = 0; $i < count($nums); $i++) {
        $nums[$i] = $nums[$i] ** 3;
    }
    return $nums;
}
var_dump(factorial($nums, $error));
// 32,
// 2つのInteger(整数)の配列を引数にもち、それぞれ同じ順番の値が合計された配列を作る関数を作ってください(配列を返り値として持つ)
// 作られる配列は２つの入力された配列のうち少ない個数の配列の個数とします。
function totalNums($nums_1, $nums_2)
{
    $totalNums = [];
    $cnt1 = count($nums_1);
    $cnt2 = count($nums_2);
    $finish = min($cnt1, $cnt2);
    // var_dump($finish, $cnt1, $cnt2);
    for ($i = 0; $i < $finish; $i++) {
        $totalNums[] = $nums_1[$i] + $nums_2[$i];
    }
    return $totalNums;
}

$nums_1 = [100,100,100];
// $nums_1 = [100,100,100,100,100,100,100];
$nums_2 = [1, 2, 3, 4, 5];
var_dump(totalNums($nums_1, $nums_2));
