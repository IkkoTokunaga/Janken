<?php

// 16, 図形の表示
//  0
//  00
//  000
// この図形をfor文を使って出力してください。
$row = 3;

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "0";
    }
    echo PHP_EOL;
}
echo PHP_EOL;
// 17, 図形の表示
//    0
//   000
//  00000
// この図形をfor文を使って出力してください。
$row = 3;

for ($i = 0; $i < $row; $i++) {
    //$row-1して１列削除しました
    for ($j = $row-1; $j > $i; $j--) {
        echo " ";
    }
    for ($k = 0; $k < $i+$i+1; $k++) {
        echo "0";
    }
    echo PHP_EOL;
}
echo PHP_EOL;

// 18, 図形の表示
//    0
//   000
//  00000
//   000
//    0
// この図形をfor文を使って出力してください。
$row = 3;

for ($i = 0; $i < $row; $i++) {
    //$row-1して１列削除しました
    for ($j = $row-1; $j > $i; $j--) {
        echo " ";
    }
    for ($k = 0; $k < $i+$i+1; $k++) {
        echo "0";
    }
    echo PHP_EOL;
}

$row -= 1;
for ($i = 0; $i < $row; $i++) {
    //$j+1して１列削除しました
    for ($j = 1; $j < $i+2; $j++) {
        echo " ";
    }

    for ($k = $row*2; $k > $i+$i+1; $k--) {
        echo "0";
    }
    echo PHP_EOL;
}
echo PHP_EOL;

for($i = 0; $i < 5; $i++) {
    for($j = 0; $j < abs(2-$i); $j++) {
        echo " ";
    }
    for($k = 0; $k < 5 - 2 * abs(2-$i); $k++) {
        echo "0";
    }
    echo PHP_EOL;
}

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= 5; $j++) {
        echo mt_rand(1, 99);
    }
    echo PHP_EOL;
}

