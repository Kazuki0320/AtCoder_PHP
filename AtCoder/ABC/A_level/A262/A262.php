<?php
	fscanf(STDIN, "%d", $N);
	if($N % 4 === 2) {
		echo $N;
	} else if($N % 4 === 0) {
		echo ($N + 2);
	} else if($N % 4 === 1) {
		echo ($N + 1);
	} else if($N % 4 === 3) {
		echo ($N + 3);
	}
?> 
