<?php
$s = trim(fgets(STDIN));
$n = strlen($s);
$v = [];

// すべての左シフトを収集
for ($k = 0; $k < $n; $k++) {
    $v[] = substr($s, $k) . substr($s, 0, $k);
}

// 辞書順で最小と最大の文字列を見つける
$min_str = min($v);
$max_str = max($v);

echo $min_str . PHP_EOL;
echo $max_str . PHP_EOL;
?>
