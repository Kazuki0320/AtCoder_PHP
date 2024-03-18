<?php
	fscanf(STDIN, "%s", $S);
	if(str_contains($S, "er")) echo "er";
	if(str_contains($S, "ist")) echo "ist";

	$ans = substr($S, -1);
	if($ans == "r") {
	    echo "er";
	} else {
	    echo "ist";
	}
