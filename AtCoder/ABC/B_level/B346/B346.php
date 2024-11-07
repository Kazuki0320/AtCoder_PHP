<?php
fscanf(STDIN, "%d %d", $w, $b);
$s = 'wbwbwwbwbwbw';
$l = $w + $b;

for ($i = 0; $i < 12; $i++) {
    $nw = 0;
    $nb = 0;
    for ($j = 0; $j < $l; $j++) {
        $s[($i+$j) % 12] == 'w' ? $nw++ : $nb++;
        if ($nw == $w && $nb == $b) {
            echo 'Yes';
            exit;
        }
    }
}

echo 'No';
