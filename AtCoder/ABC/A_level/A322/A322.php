<?php
	$n = fgets(STDIN);
	$s = str_split(trim(fgets(STDIN)));

	for($i = 0; $i < $n; $i++) {
		if($s[$i] === "A") {
			if($s[$i + 1] === "B") {
				if($s[$i + 2] === "C") {
          echo $i + 1;
          exit;
				}
			}
		}
	}
	echo -1;
?>

