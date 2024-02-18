<?php
    $N = trim(fgets(STDIN));
    $time = str_split($N);
	$H = 21;
	if(0 <= $N && $N < 60) {
		if($N < 10) {
			echo $H . ":" . "0" . $N;
			exit;
		}
		echo $H . ":" . $N;
		exit;
	} else if(60 <= $N && $N < 70) {
	    echo ($H + 1) . ":" . "0" . $N[1];
	    exit;
	}
	echo ($H + 1) . ":" . ($N - 60);
	exit;
?>
