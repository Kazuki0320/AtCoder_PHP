<?php
$S = str_split(trim(fgets(STDIN)));
$T = str_split(trim(fgets(STDIN)));

$S_ascii = array_map('ord', $S);
$T_ascii = array_map('ord', $T);

// K を求める。S と T の最初の文字の差を基準にする。
$K = ($T_ascii[0] - $S_ascii[0] + 26) % 26;

$flag = true;

for ($i = 0; $i < count($S); $i++) {
    // 各文字の差が K と一致するか確認する
    if (($T_ascii[$i] - $S_ascii[$i] + 26) % 26 !== $K) {
        $flag = false;
        break;
    }
}

if ($flag) {
    echo "Yes\n";
} else {
    echo "No\n";
}
?>
