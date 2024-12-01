<?php
fscanf(STDIN, "%d %d", $xa, $ya);
fscanf(STDIN, "%d %d", $xb, $yb);
fscanf(STDIN, "%d %d", $xc, $yc);

$a = abs($xa - $xb) ** 2 + abs($ya - $yb) ** 2;
$b = abs($xb - $xc) ** 2 + abs($yb - $yc) ** 2;
$c = abs($xc - $xa) ** 2 + abs($yc - $ya) ** 2;

if($a == $b + $c || $b == $a + $c || $c == $a + $b){
  echo "Yes";
}
else{
  echo "No";
}
?>
