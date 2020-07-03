<?php

// 3 5 9
// 15 20 35
// 30 45 72
// 15 20 31
// 27 33 59
// 27 35 77



main();

function main()
{
    while ($input_line = trim(fgets(STDIN))) {
        $names[] = $input_line;
    }
    foreach ($names as $name) {
        $score[] = array_map('intval', explode(" ", $name));
    }
    
    for ($i = 0; $i < count($score); $i++) {
        $gold[] = $score[$i][0];
        $silver[] = $score[$i][1];
        $blond[] = $score[$i][2];
    }

    $goldTop = goldTop($gold);
    top($goldTop,$names);
    // $silverTop = silverTop($silver);
    // $blondTop = blondTop($blond);
    

    
}

function top($medal_top, $names) {
    
    if ($medal_top > 1) {
        return false;
    }
    echo $names[$medal_top[0]];
}


function goldTop($gold)
{
    $gold_max = max($gold);
    $gold_top = array_keys($gold, $gold_max);

    return $gold_top;
}

function silverTop($silver)
{
    $silver_max = max($silver);
    $silver_top = array_keys($silver, $silver_max);

    return $silver_top;
}

function blondTop($blond)
{
    $blond_max = max($blond);
    $blond_top = array_keys($blond, $blond_max);

    return $blond_top;
}



var_dump($names);
