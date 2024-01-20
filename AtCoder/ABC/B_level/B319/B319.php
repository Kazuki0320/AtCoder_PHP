<?php
$N = intval(trim(fgets(STDIN)));
$ans = str_repeat('-', $N + 1);

for($i = 0; $i <= $N; $i++) {
	for($j = 1; $j <= 9; $j++) {
		if($N % $j == 0 && $i % ($N/$j) == 0){
			$ans[$i] = strval($j);
			break;
		}
	}
}
echo $ans;
?>
