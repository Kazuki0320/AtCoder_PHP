<?php
	fscanf(STDIN, "%d%d%%d", $N, $K, $A);
	$man = explode(' ', intval(range(1, $N)));
	for($i = 0; $i < $N; $i++) {
		if($A == $man[$i]) {
			for($i = 0; $i+1 < $N; $i++) {
				$N1 .= $man[$i];
			}
		}
		$N2 .= $man[$i];
	}
	$new_man = $N1 . $N2;
	for($i = 0; $i < $N; $i++) {
		$result = $man[$i];
	}
	echo $result;
