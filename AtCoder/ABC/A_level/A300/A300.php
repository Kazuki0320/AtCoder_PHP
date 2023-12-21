<?php
	fscanf(STDIN, "%d %d %d", $N, $A, $B);
	$select = explode(" ", trim(fgets(STDIN)));

	$ans = $A + $B;
	for($i = 0; $i < $N; $i++) {
		if($select[$i] == $ans) {
			echo $i + 1;
			break;
		} else if($select[$i] == 1) {
			echo "1";
			break;
		}
	}
?>
