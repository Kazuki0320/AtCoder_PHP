<?php
	$fileInput = fgets(STDIN);
	$numbers = explode(" ", trim(fgets(STDIN)));

	rsort($numbers);

	for($i = 0; $i < $fileInput; $i++) {
		if($numbers[0] > $numbers[$i]) {
			echo $numbers[$i];
			break;
		}
	}
?>