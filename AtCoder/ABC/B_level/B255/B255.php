<?php
fscanf(STDIN, "%d %d", $N, $K);
$A = explode(' ', preg_replace('/\n/', '', fgets(STDIN)));
$X = [];
$Y = [];
for ($i = 0; $i < $N; $i++) {
	fscanf(STDIN, "%d %d", $x, $y);
	$X[] = $x;
	$Y[] = $y;
}

// var_export($X);

$R = [];

for ($i = 0; $i < $N; $i++) {
  $x1 = $X[$i];
  $y1 = $Y[$i];
  $Rtmp = [];
  for ($j = 0; $j < $K; $j++) {
    $x2 = $X[$A[$j]-1];
    $y2 = $Y[$A[$j]-1];

    $Rtmp[] = pow($x2-$x1, 2) + pow($y2-$y1, 2);
  }
  $R[] = min($Rtmp);
}

echo sqrt(max($R)) . "\n";
