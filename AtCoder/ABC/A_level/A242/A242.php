<?php
fscanf(STDIN, "%s", $s);

$a = explode($s[0], $s);

if (count($a) === 2) {
	echo 1;
} else {
	for ($i=0; $i < count($a); $i++) {
		if (strlen($a[$i])) {
			echo $i+1;
			exit();
		}
	}
}
