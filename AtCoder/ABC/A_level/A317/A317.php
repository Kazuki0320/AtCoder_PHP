<?php
	fscanf(STDIN, "%d%d%d", $m, $HP, $h);
	$t = explode(" ", fgets(STDIN));

	foreach($t as $key => $value) {
		if($HP + $value >= $h) {
			echo ($key + 1);
			break;
		}
	}
?>
