<?php
	fscanf(STDIN, "%d", $c);
	$p = explode(" ", trim(fgets(STDIN)));
	
	for($i = 1; $i < $c; $i++) {
		if($p[0] <= $p[$i]) {
			$result = ($p[$i]+1) - $p[0];
			echo $result;
			exit;
		} else {
			echo "0";
			exit;
		}
	}
?>
