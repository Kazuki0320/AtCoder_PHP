<?php
	fscanf(STDIN, "%s", $s);

	$S = ["ACE", "BDF", "CEG", "DFA", "EGB", "FAC","GBD"];

	foreach($S as $key => $value) {
		if($s === $value) {
			echo "Yes";
			exit;
		}
	}
	echo "No";
?>