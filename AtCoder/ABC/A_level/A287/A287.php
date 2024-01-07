<?php
	fscanf(STDIN, "%d", $N);

	$agreeCount = 0;
	$disagreeCount = 0;
	for($i = 0; $i < $N; $i++) {
		$S = trim(fgets(STDIN));
		if($S == "for") {
			$agreeCount++;
		} else {
			$disagreeCount++;
		}
	}

	if($agreeCount > $disagreeCount) {
		echo 'Yes';
		exit;
	}
	echo 'No';
?>
