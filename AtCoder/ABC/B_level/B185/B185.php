<?php
fscanf(STDIN, "%d %d %d", $N, $M, $T);
$Max = $N;
$time = 0;
for ($i = 0; $i < $M; $i++) {
  fscanf(STDIN, "%d %d", $A, $B);
  $N -= ($A - $time);
  if ($N <= 0) {
      echo "No";
      exit;
  }
  $N = min($Max, $N + $B - $A);
  $time = $B;
}
$N -= $T - $time;
if ($N <= 0) {
    echo "No";
} else {
    echo "Yes";
}
