<?php
  // 部屋の数とボーナス部屋の数と持ち時間を取得
  fscanf(STDIN, "%d %d %d", $n, $m, $t);

  // 各部屋の消費時間を取得
  $a = array_map('intval', explode(" ", trim(fgets(STDIN))));

  // ボーナス部屋の情報を取得
  $x = array();
  $y = array();
  for($i = 0; $i < $m; $i++){
    list($xi, $yi) = explode(" ", trim(fgets(STDIN)));
    $x[] = (int)$xi;
    $y[] = (int)$yi;
  }

  // 移動開始
  $ans = "Yes";
  $j = 0;
  for($i = 0; $i < $n - 1; $i++){
    $t -= $a[$i];
    if($t <= 0){
      $ans = "No";
      break;
    }
    // ボーナス部屋に到達した場合、ボーナス時間を加算
    if($j < $m && $x[$j] == $i + 2){
      $t += $y[$j];
      $j++;
    }
  }
  
  echo $ans . PHP_EOL;
?>
