<?php

const STONE = 0;
const SCISS = 1;
const PARPER = 2;

const HAND_TYPE = [
    STONE => '『グー』',
    SCISS => '『チョキ』',
    PARPER => '『パー』'
];
const DRAW = 0;
const LOSE = 1;
const WIN = 2;

const JUDGE = [
    DRAW => "DRAW!! ONE MORE!!",
    LOSE => "LOSE!!",
    WIN  => "WIN!!"
];

const RETRY = 1;
const QUIT  = 2;

const GAME_AGAIN = [
    RETRY => "ONE MORE!!",
    QUIT  => "Thank you, see you again!!"
];

main();

function main()
{   
    $myHand = myChoose();
    $pcHand = pcChoose();
    $judge  = judge($myHand, $pcHand);
    result($judge);
    if ($judge === DRAW) {
        return main();
    }
    $retry = retry();
    if ($retry === RETRY) {
        echo GAME_AGAIN[RETRY] . PHP_EOL;
        return main();
    }
    if ($retry === QUIT) {
        echo GAME_AGAIN[QUIT] . PHP_EOL; 
    }
}

function myChoose()
{
    foreach (HAND_TYPE as $key => $hand) {
        echo sprintf("%d => %s", $key, $hand);
    }
    echo PHP_EOL;
    $myChoose = trim(fgets(STDIN));
    if (!isset(HAND_TYPE[$myChoose])) {
        echo "【0~2の整数を入力して下さい】" . PHP_EOL;
        return myChoose();
    }
    echo "自分 " . HAND_TYPE[$myChoose] . PHP_EOL;
    return $myChoose;
}

function pcChoose()
{
    $pcChoose = array_rand(HAND_TYPE);
    echo "P C  " . HAND_TYPE[$pcChoose] . PHP_EOL;
    return $pcChoose;
}

function judge($myHand, $pcHand)
{
    return ($myHand - $pcHand + 3) % 3;
}

function result($judge)
{
    echo JUDGE[$judge] . PHP_EOL;
}

function retry() {
    echo "もう一度やりますか？" . PHP_EOL . "RETRY=>1" . PHP_EOL . "QUIT =>2" . PHP_EOL;

    $retry = (int)trim(fgets(STDIN));
    $check = check($retry);
    if ($check === false) {
        echo "【1 or 2 を選択して下さい】" . PHP_EOL;
        return retry();
    }
    
        return $retry;
}

function check($retry) {
//定数を使って流れがわかるように書き換えました
    if ($retry === RETRY) {
        return true;
    }
    elseif ($retry === QUIT) {
        return true;
    }
    else {
        return false;
    }
}
