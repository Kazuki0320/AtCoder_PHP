<?php
[$r, $c] = explode(' ', trim(fgets(STDIN)));  // 盤面の行数 ($r) と列数 ($c) を読み込む
$bombs = [];  // 爆弾の情報を格納する配列
for ($i=0; $i < $r; $i++) { 
  $row = str_split(trim(fgets(STDIN)));  // 各行の文字を読み込み、配列に変換
  foreach ($row as $key => $block) {
    if (is_numeric($block)) $bombs[] = [$block, $i, $key];  // 数字が爆弾の場合、爆弾の情報を格納
  } 
  $arr[] = $row;  // 行のデータを配列に追加
}

foreach ($bombs as $bomb) {
  $val = $bomb[0];  // 爆弾の威力
  $y = $bomb[1];  // 爆弾の行位置
  $x = $bomb[2];  // 爆弾の列位置
  for ($i=0; $i < $r; $i++) { 
    for ($j=0; $j < $c; $j++) { 
      // マンハッタン距離が爆弾の威力以下である場合、そのマスを空きマスに変える
      if ((abs($i - $y) + abs($j - $x)) <= $val) $arr[$i][$j] = '.';
    }
  }
}

foreach ($arr as $row) {
  echo implode('', $row) . PHP_EOL;  // 最終的な盤面を出力
}

