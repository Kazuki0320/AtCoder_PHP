<?php

$n = trim(fgets(STDIN));
$a = explode(" ", trim(fgets(STDIN)));

$s = [];
$t = [];
for($i=0; $i<$n-1; $i++) {
	list($s[], $t[]) = explode(" ", trim(fgets(STDIN)));
}

for($i=0; $i<$n-1; $i++) {
	if($a[$i] >= $s[$i]) {
		$l = intdiv($a[$i], $s[$i]);
		$a[$i+1] += $t[$i] * $l;
		var_dump("a", $a[$i+1]);
	}
}

echo $a[$n-1]."\n";


