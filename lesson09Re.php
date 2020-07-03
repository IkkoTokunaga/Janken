<?php
// 31,
// Integer(整数)の配列を渡すと、配列の中身が３乗される関数を作ってください。
// なお、関数の中で引数に必要だと思うvalidationも作成してください。（validationの意味がわからない場合は、お調べください）

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// $nums = [];
// $nums = [3, "banana", 5];
// $nums = [3, 5.55555, 5];
// $nums = 111;

function check($nums)
{//bool型を返すように修正しました
    $error = "";
    if (!is_array($nums)) {
        $error = "配列ではありません";
    }
    if (empty($nums)) {
        $error = "配列が空です";
    }
    foreach ($nums as $num) {
        if (!is_int($num)) {
            $error = "配列には整数を入れて下さい";
        }
    }
    if (empty($error)){
        return true;
    } else {
        return false;
    }
}

$error = check($nums);
// var_dump($error);

function factorial($nums, $error)
{
    if ($error !== true) {
        return [];
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
    $max = min($cnt1, $cnt2);//変数名を修正しました
    // var_dump($max, $cnt1, $cnt2);
    for ($i = 0; $i < $max; $i++) {
        $totalNums[] = $nums_1[$i] + $nums_2[$i];
    }
    return $totalNums;
}

$nums_1 = [100,100,100];
// $nums_1 = [100,100,100,100,100,100,100];
$nums_2 = [1, 2, 3, 4, 5];
// var_dump(totalNums($nums_1, $nums_2));
