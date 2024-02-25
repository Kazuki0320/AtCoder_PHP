<?php
$num = str_split(trim(fgets(STDIN)));
$numArray = array_map('intval', $num);
sort($numArray);
for($i = 0; $i < 10; $i++) {
	if($numArray[$i] !== $i) {
		echo $i;
		exit;
	}
}
?>
