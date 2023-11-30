<?php
	$n = (int)fgets(STDIN);
	$w_x_list = array_map(function () {
		[$w, $x] = explode(' ', fgets(STDIN));
		return [(int)$w, (int)$x];
	}, range(1, $n));

	$max = 0;
	for($i = 0; $t < 24; $i++) {
		$filtered	=	array_filter($w_x_list, function(array $w_x) use ($t) {
			$local_time = ($w_x[1] + $t) % 24;
			return 9 <= $local_time && $local_time < 18;
		});

		$sum = array_reduce($filtered, function (int $carry, array $item) {
			return $carry + $item[0];
		}, 0);

		$max = max($max, $sum);
	}

	exit("$max");
?>