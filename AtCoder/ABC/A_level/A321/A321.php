<?php
	$s = str_split(trim(fgets(STDIN)));
	$length = count($s);
	
	if($length === 1) {
		echo "Yes";
		exit;
	}
	
	for($i = 0; $i < $length - 1; $i++) {
		if($s[$i] <= $s[$i + 1]) {
			echo "No";
			exit;
		}
	}
	echo "Yes";
?>
