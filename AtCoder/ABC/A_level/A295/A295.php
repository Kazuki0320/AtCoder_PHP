<?php
	fscanf(STDIN, "%d", $N);
	$S = explode(" ", trim(fgets(STDIN)));

	for($i = 0; $i < $N; $i++) {
		if($S[$i] == 'and' || $S[$i] == 'not' || $S[$i] == 'that' || $S[$i] == 'the' || $S[$i] == 'you') {
			echo "Yes";
			exit;
		}
	}
	echo "No";
?>