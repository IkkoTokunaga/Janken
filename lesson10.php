<?php
// 33,
// 1階層3部屋ある3階建てのアパートがある。101 102、、、という部屋番号で管理するとする。
// 多次元配列で表してください。
$floor1st = [101, 102, 103];
$floor2nd = [201, 202, 203];
$floor3rd = [301, 302, 303];

$apart = [$floor1st, $floor2nd, $floor3rd];

var_dump($apart);
// 34,連想配列
// メンバーを意味する配列に下記内容をキーに持つ値を格納したい。
// 名前
//     -性別
//     -年齢
// メンバーを意味する配列を宣言し、上記内容を保持する配列を作成してください。
$arashi = [
    "松本潤" => ["age" =>"36歳", "gender"=>"男"],
    "大野智" => ["age" =>"39歳", "gender"=>"男"],
    "櫻井翔" => ["age" =>"38歳", "gender"=>"男"],
    "相葉雅紀" => ["age" =>"37歳", "gender"=>"男"],
    "二宮和也" => ["age" =>"36歳", "gender"=>"男"],
];

var_dump($arashi);

// 35,
// 次の配列を使用して、2という値を出力してください。
$test = array(
  array(
    array(1,1,1),
    array(1,1,1),
    array(1,1,1)),
  array(
    array(1,1,2),
    array(1,1,1)
  )
);
echo $test[1][0][2] . PHP_EOL;
// 36,
// 35の続き、
// 35の配列をfor文をつかって全て出力してください　　(1 1 1 1 1 1 1 1 1 1 1 2 1 1 1　的な)
for ($i = 0; $i < count($test); $i++) {
    for ($j = 0; $j < count($test[$i]); $j++){
        for ($k = 0; $k < count($test[$i][$j]); $k++){
            echo $test[$i][$j][$k] . " ";
        }
    }
}
echo PHP_EOL;
// foreach文を使った出力もしてください。
foreach ($test as $index1 => $test1) {
    foreach ($test1 as $index2 => $test2) {
        foreach ($test2 as $test3) {
            echo $test3 . " ";
        }
    }
}