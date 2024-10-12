<?php
fscanf(STDIN, "%d %d", $N, $M);

$food_counts = array();

for ($i = 0; $i < $N; $i++) {
    $parts = explode(' ', trim(fgets(STDIN)));
    $Ki = array_shift($parts); // 各人が好きな食べ物の数

    foreach ($parts as $food) {
        if (isset($food_counts[$food])) {
            $food_counts[$food]++;
        } else {
            $food_counts[$food] = 1;
        }
    }
}

// 全員が好きだと言った食べ物の種類数をカウント
$count = 0;
foreach ($food_counts as $cnt) {
    if ($cnt == $N) {
        $count++;
    }
}

echo $count . PHP_EOL;
?>

