<?php
	$n  = fgets(STDIN);
	fscanf(STDIN, "%s", $s);
	
	for($i = 0; $i < $n; $i++) {
		if($s[$i] === "a" && $s[$i + 1] === "b" || $s[$i] === "b" && $s[$i + 1] === "a") {
			echo "Yes";
			exit;
		}
	}
	echo "No";
?>
