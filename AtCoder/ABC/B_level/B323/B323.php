<?php
	$n = intval(trim(fgets(STDIN)));
	$arr = [];

	for($i = 0; $i < $n; $i++) {
		$countValue = trim(fgets(STDIN));
		$count = 0;

		for($j = 0; $j < $n; $j++) {
			if($countValue[$j] == "o") {
				$count++;
			}
		}
		$arr[$i + 1] = $count;
	}

	arsort($arr);
	echo implode(" ", array_keys($arr));
?>

