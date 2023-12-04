<?php
	$m = fgets(STDIN);
	$s = str_split(trim($m));

  $result = "Yes";
	for($i = 1; $i <= count($s); $i += 2) {
		if($s[$i] === '1') {
			$result = "No";
			break;
		}
	}
	echo $result;
?>