<?php 
$n = 100;
$m = 0;
$cnt = 0;
for ($i = 100; $i > 0; $i--) {
    $n -= 3;
    $m += 3;
    $cnt++;
                if ($n < 0) {
                break;
                }
    echo $n . "----" . $m . "----" . $cnt .PHP_EOL;
}

echo "dfsjlasdjf";