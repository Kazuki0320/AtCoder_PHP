<?php
	$InputDayOfWeek = trim(fgets(STDIN));
	$dayOfWeek = [
		'Monday',
		'Tuesday',
		'Wednesday',
		'Thursday',
		'Friday'
	];

	$key = array_search($InputDayOfWeek, $dayOfWeek);
	$result = 5 - $key;
	echo $result;
?>
