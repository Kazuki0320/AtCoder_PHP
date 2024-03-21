<?php
	fscanf(STDIN, "%d", $N);
	
	if(0 <= $N && $N < 40) {
		echo 40 - $N;
	} else if(40 <= $N && $N < 70) {
		echo 70 - $N;
	} else if(70 <= $N && $N < 90) {
		echo 90 - $N;
	} else if(90 <= $N) {
		echo "expert";
	}
