<?php
fscanf(STDIN, "%d", $N);
$list = range(0, $N);
$list_rev = array_reverse($list);
foreach ($list_rev as $value) {
    echo $value . PHP_EOL;
}
?>
