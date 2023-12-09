<?php
	fscanf(STDIN, "%s", $s);

	$m = "";
	for($i = 0; $i < $s; $i++) {
		if($s === "a" || $s === "i" || $s === "u" || $s === "e" || $s === "o") {
			break;
		} else {
			$m .= $s;
		}
	}
	echo $m;
?>
