<?php
fscanf(STDIN, "%d %d", $N, $M);

// グラフを隣接リストで表現
$graph = array_fill(1, $N, []);

for ($i = 0; $i < $M; $i++) {
    fscanf(STDIN, "%d %d", $A, $B);
    $graph[$A][] = $B;
    $graph[$B][] = $A;
}

for ($i = 1; $i <= $N; $i++) {
    $connected_cities = $graph[$i];
    sort($connected_cities);
    $d = count($connected_cities);
    echo $d;
    foreach ($connected_cities as $city) {
        echo " " . $city;
    }
    echo PHP_EOL;
}
?>
