<?php
	fscanf(STDIN, "%d%d%d", $S, $T, $X);

	if(($S <= $T && $S <= $X && $X < $T) || ($S > $T && ($S <= $X || $X < $T))) {
		echo "Yes";
		exit;
	}
	echo "No";
