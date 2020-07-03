<?php
// 40 じゃんけんを作成しよう！
// 下記の要件を満たす「じゃんけんプログラム」を開発してください。
// 要件定義
// ・使用可能な手はグー、チョキ、パー
// ・勝ち負けは、通常のじゃんけん
// ・PHPファイルの実行はコマンドラインから。
// ご自身が自由に設計して、プログラムを書いてみましょう！

judge();

function myChoose()
{
    echo "1 =>『グー』、2 =>『チョキ』、3 =>『パー』" . PHP_EOL;
    $myChoose = (int) trim(fgets(STDIN));

    //switch文のdefaultで定義

    // $check = check($myChoose);
    // if ($check !== true) {
    //     echo "【1~3の整数を入力して下さい】" . PHP_EOL;
    //     return myChoose();
    // }

    switch ($myChoose){
        case 1: echo "私  『グー』" . PHP_EOL;
        break;
        case 2: echo "私  『チョキ』" . PHP_EOL;
        break;
        case 3: echo "私  『パー』" . PHP_EOL;
        break;

        default: echo "【1~3の整数を入力して下さい】" . PHP_EOL;
        return myChoose();
    }
    
    return $myChoose;
}

function pgChoose()
{
    $pgChoose = mt_rand(1, 3);

    switch ($pgChoose){
        case 1: echo "相手『パー』" . PHP_EOL;
        break;
        case 2: echo "相手『チョキ』" . PHP_EOL;
        break;
        case 3: echo "相手『グー』" . PHP_EOL;
        break;
    }

    return $pgChoose;
}

function judge()
{
    $myChoose = myChoose();
    $pgChoose = pgChoose();

    if ($myChoose + $pgChoose === 4) {
        echo "あいこ、もう一度！" . PHP_EOL;
        return judge();
    }
    if (($myChoose + $pgChoose) % 3 === 0) {
        echo "WIN!!" . PHP_EOL;
    } else {
        echo "LOSE!!" . PHP_EOL;
    }
}

//switch文のdefaultで定義

// function check($myChoose)
// {
//     if (empty($myChoose)) {
//         return false;
//     }
//     if (!is_int($myChoose)) {
//         return false;
//     }
//     if ($myChoose > 3 || $myChoose < 1) {
//         return false;
//     }
//     return true;
// }
