<?php
	$N = trim(fgets(STDIN));
	$inputNumber = explode(" ", trim(fgets(STDIN)));
	sort($inputNumber);

	for($i = 0; $i < $N - 1; $i++) {
	     if(($inputNumber[$i] + 1) === (int)$inputNumber[$i+1]) {
                continue;
	     } else {
                echo $inputNumber[$i] + 1;
                exit;
	     }
	}
?>
