<?php
fscanf(STDIN, "%d %d", $n, $m);
$array = [];
for ($i = 1; $i < $n; $i++) {
    for ($j = $i+1; $j <= $n; $j++) {
        $array[] = strval($i).strval($j);
    }
}
var_dump($array);
while ($line = trim(fgets(STDIN))) {
    $line = explode(" ", $line);
    for ($i = 0; $i < $n-1; $i++) {
        for ($j = 0; $j < count($array); $j++) {
            $num = $line[$i].$line[$i+1];
            var_dump("num1:", $num);
            if ($line[$i] > $line[$i+1]) {
                $num = $line[$i+1].$line[$i];
                var_dump("num2:", $num);
            }
            if ($num === $array[$j]) {
                array_splice($array, $j, 1);
                var_dump("slice:", $array);
                break;
            }
        }
    }
}
echo count($array);
?>
