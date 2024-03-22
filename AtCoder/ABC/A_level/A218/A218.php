<?php
	fscanf(STDIN, "%d", $x);
	$S = str_split(trim(fgets(STDIN)));
	$ans = $S[$X-1];
	if($ans == "⚪︎") {
		echo "Yes";
	} else {
		echo "No";
	}
