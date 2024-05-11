<?php


list($h, $w) = explode(' ', trim(fgets(STDIN)));

//マス目を作成
$math = [];
for ($i = 0; $i < $h; $i++) {
    $math[] = str_split(trim(fgets(STDIN)));
}


//横で探す
for ($i = 0; $i <= $h; $i++) {
    //左から読むとき
    for ($j = 0; $j <= $w - 5; $j++) {
        if ($math[$i][$j] == 's' && $math[$i][$j + 1] == 'n' && $math[$i][$j + 2] == 'u' && $math[$i][$j + 3] == 'k' && $math[$i][$j + 4] == 'e') {
            echo $i + 1 . ' ' . $j + 1 . PHP_EOL;
            echo $i + 1 . ' ' . $j + 2 . PHP_EOL;
            echo $i + 1 . ' ' . $j + 3 . PHP_EOL;
            echo $i + 1 . ' ' . $j + 4 . PHP_EOL;
            echo $i + 1 . ' ' . $j + 5 . PHP_EOL;
            exit;
        }
    }

    //右から読むとき
    for ($j = $w - 1; $j >= 0; $j--) {
        if ($math[$i][$j] == 's' && $math[$i][$j - 1] == 'n' && $math[$i][$j - 2] == 'u' && $math[$i][$j - 3] == 'k' && $math[$i][$j - 4] == 'e') {
            echo $i + 1 . ' ' . $j + 1 . PHP_EOL;
            echo $i + 1 . ' ' . $j  . PHP_EOL;
            echo $i + 1 . ' ' . $j - 1 . PHP_EOL;
            echo $i + 1 . ' ' . $j - 2 . PHP_EOL;
            echo $i + 1 . ' ' . $j - 3 . PHP_EOL;
            exit;
        }
    }
}

//縦で探す
for ($j = 0; $j < $w; $j++) {
    //上から読んだ時
    for ($i = 0; $i < $h; $i++) {
        if ($math[$i][$j] == 's' && $math[$i + 1][$j] == 'n' && $math[$i + 2][$j] == 'u' && $math[$i + 3][$j] == 'k' && $math[$i + 4][$j] == 'e') {
            echo $i + 1 . ' ' . $j + 1 . PHP_EOL;
            echo $i + 2 . ' ' . $j + 1  . PHP_EOL;
            echo $i + 3 . ' ' . $j + 1  . PHP_EOL;
            echo $i + 4 . ' ' . $j + 1  . PHP_EOL;
            echo $i + 5 . ' ' . $j + 1  . PHP_EOL;
            exit;
        }
    }


    //下から読んだ時
    for ($i = $h - 1; $i >= 0; $i--) {
        if ($math[$i][$j] == 's' && $math[$i - 1][$j] == 'n' && $math[$i - 2][$j] == 'u' && $math[$i - 3][$j] == 'k' && $math[$i - 4][$j] == 'e') {
            echo $i + 1 . ' ' . $j + 1 . PHP_EOL;
            echo $i  . ' ' . $j + 1  . PHP_EOL;
            echo $i - 1 . ' ' . $j + 1  . PHP_EOL;
            echo $i - 2 . ' ' . $j + 1  . PHP_EOL;
            echo $i - 3 . ' ' . $j + 1  . PHP_EOL;
            exit;
        }
    }
}


//斜めで探す
for ($i = 0; $i <= $h; $i++) {
    for ($j = 0; $j < $w; $j++) {
        //左上から右下
        if ($math[$i][$j] == 's' && $math[$i + 1][$j + 1] == 'n' && $math[$i + 2][$j + 2] == 'u' && $math[$i + 3][$j + 3] == 'k' && $math[$i + 4][$j + 4] == 'e') {
            echo $i + 1 . ' ' . $j + 1 . PHP_EOL;
            echo $i + 2 . ' ' . $j + 2  . PHP_EOL;
            echo $i + 3 . ' ' . $j + 3  . PHP_EOL;
            echo $i + 4 . ' ' . $j + 4  . PHP_EOL;
            echo $i + 5 . ' ' . $j + 5  . PHP_EOL;
            exit;
        }



        //右上から左下
        if ($math[$i][$j] == 's' && $math[$i + 1][$j - 1] == 'n' && $math[$i + 2][$j - 2] == 'u' && $math[$i + 3][$j - 3] == 'k' && $math[$i + 4][$j - 4] == 'e') {
            echo $i + 1 . ' ' . $j + 1 . PHP_EOL;
            echo $i + 2 . ' ' . $j   . PHP_EOL;
            echo $i + 3 . ' ' . $j - 1  . PHP_EOL;
            echo $i + 4 . ' ' . $j - 2  . PHP_EOL;
            echo $i + 5 . ' ' . $j - 3  . PHP_EOL;
            exit;
        }



        //左下から右上
        if ($math[$i][$j] == 's' && $math[$i - 1][$j + 1] == 'n' && $math[$i - 2][$j + 2] == 'u' && $math[$i - 3][$j + 3] == 'k' && $math[$i - 4][$j + 4] == 'e') {
            echo $i + 1 . ' ' . $j + 1 . PHP_EOL;
            echo $i  . ' ' . $j + 2  . PHP_EOL;
            echo $i - 1 . ' ' . $j + 3  . PHP_EOL;
            echo $i - 2 . ' ' . $j + 4  . PHP_EOL;
            echo $i - 3  . ' ' . $j + 5  . PHP_EOL;
            exit;
        }



        //右下から左上
        if ($math[$i][$j] == 's' && $math[$i - 1][$j - 1] == 'n' && $math[$i - 2][$j - 2] == 'u' && $math[$i - 3][$j - 3] == 'k' && $math[$i - 4][$j - 4] == 'e') {
            echo $i + 1 . ' ' . $j + 1 . PHP_EOL;
            echo $i  . ' ' . $j   . PHP_EOL;
            echo $i - 1 . ' ' . $j - 1  . PHP_EOL;
            echo $i - 2 . ' ' . $j - 2  . PHP_EOL;
            echo $i - 3 . ' ' . $j - 3  . PHP_EOL;
            exit;
        }
    }
}
