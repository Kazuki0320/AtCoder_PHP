<?php
fscanf(STDIN, '%s %s', $S, $T);

$s_len = strlen($S);
$t_len = strlen($T);

for ($w = 1; $w < $s_len; $w++) {
    for ($c = 0; $c < $w; $c++) {
        $now = '';
        for ($i = 0; $c + $i < $s_len; $i += $w) {
            $now .= $S[$c + $i];
        }
        if ($now === $T) {
            exit('Yes');
        }
    }
}

echo 'No';

