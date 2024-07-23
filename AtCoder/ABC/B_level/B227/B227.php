<?php

fscanf(STDIN, "%d", $A);

$S = array_map("intval", explode(" ", trim(fgets(STDIN))));
$incorrect_count = 0;

foreach ($S as $s) {
    $found = false;
    for ($a = 1; $a <= 100; $a++) {
        for ($b = 1; $b <= 100; $b++) {
            if (4 * $a * $b + 3 * $a + 3 * $b == $s) {
                $found = true;
                break 2; // 外側のループも含めて抜ける
            }
        }
    }
    if (!$found) {
        $incorrect_count++;
    }
}

echo $incorrect_count . "\n";
?>

