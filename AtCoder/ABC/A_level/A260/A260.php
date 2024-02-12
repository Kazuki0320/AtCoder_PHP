<?php
	$S = str_split(trim(fgets(STDIN)));
	$results = array_count_values($S);
	foreach ($results as $value) {
		if ($value === 1) {
			$key = array_search($value, $results);
			echo $key;
			exit;
		} 
	}
	echo -1;
?>
