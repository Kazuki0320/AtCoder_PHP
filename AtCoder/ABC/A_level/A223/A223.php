<?php
	fscanf(STDIN, "%d", $n);
	if($n === 0) {
	    echo "No";
	} else if($n % 100 == 0) {
	    echo "Yes";
	} else {
	    echo "No";
	}
