<?php
//39
// さて、今回は、input関数だけで
// 名前と年齢を入力するようにしたいです。
// 何の入力か判別するには、引数で‘name’, ‘age’のような文字列を渡すことで
// 判別できそうですね。
// よろしければ、修正してみてください＾＾



$name = input('name', $name);
$age = input('age', $name);
showAll($name, $age);

function input($check, $name)
{
    if ($check === 'name') {
        echo "あなたの名前を教えて下さい。" . PHP_EOL;
       
    }
    if ($check === 'age') {
        echo $name . "さん、あなたの年齢は何歳ですか？" . PHP_EOL;
       
    }
    $input = trim(fgets(STDIN));
    
    $bool = true;
    //名前の入力だったら、名前のバリデーション関数を呼ぶ
    if ($check === 'name') {
        $bool = checkName($input);
    }
    //年齢の入力だったら、年齢のバリデーション関数を呼ぶ
    if ($check === 'age') {
        $bool = checkAge($input, $name);
    }
    //もしバリデーションがNGなら、再帰関数
    if ($bool === false) {
        return input($check, $name);
    }
    return $input;
}

function checkName($name)
{
    if (empty($name)) {
        echo "[名前を入力して下さい]" . PHP_EOL;
        return false;
    }
    if (strlen($name) > 10) {
        echo "[名前は１０文字以内]" . PHP_EOL;
        return false;
    }
    return true;
}


function checkAge($age, $name)
{
    var_dump($age);
    if (empty($age)) {
        echo "[年齢を入力して下さい]" . PHP_EOL;
        return false;
    }
    if (!is_numeric($age)) {
        echo "[年齢は半角数字]" . PHP_EOL;
        return false;
    }
    if (strlen($age) > 3) {
        echo "[年齢を正しく入力して下さい]" . PHP_EOL;
        return false;
    }
    return true;
}

function showAll($name, $age)
{
    if (!empty($name) && !empty($age)) {
        echo $name . "さん（年齢:" . $age . "）、登録ありがとうございます！" . PHP_EOL;
    }
}
