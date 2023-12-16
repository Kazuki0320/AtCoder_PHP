<?php
  fscanf(STDIN, "%d", $n);
  $walk_count = explode(" ", trim(fgets(STDIN)));

  for ($week = 0; $week < $n; $week++) {
    $result = 0;
    // 各週の歩数の合計
    for ($day = 0; $day < 7; $day++) {
        $result += $walk_count[$week * 7 + $day];
    }
    // 各週の結果を表示または利用
    echo("$result ");
  }
?>
