<?php
$number = trim(fgets(STDIN));
$c = 0;

for ($i = 1; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
			for ($k = 0; $k < 10; $k++) {
				$c = $i * 100 + $j * 10 + $k;
				if ($number <= $c && $number * $j + $k) {
					echo $c;
					exit (0);
				}
			}
    }
}
?>
