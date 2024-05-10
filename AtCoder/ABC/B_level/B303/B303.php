<?php
fscanf(STDIN, "%d %d", $n, $m);
$array = [];
for ($i = 1; $i < $n; $i++) {
    for ($j = $i+1; $j <= $n; $j++) {
        $array[] = strval($i).strval($j);
    }
}

while ($line = trim(fgets(STDIN))) {
    $line = explode(" ", $line);
    for ($i = 0; $i < $n-1; $i++) {
        for ($j = 0; $j < count($array); $j++) {
            $num = $line[$i].$line[$i+1];
            if ($line[$i] > $line[$i+1]) {
                $num = $line[$i+1].$line[$i];
            }
            if ($num === $array[$j]) {
                array_splice($array, $j, 1);
                break;
            }
        }
    }
}
echo count($array);
?>
