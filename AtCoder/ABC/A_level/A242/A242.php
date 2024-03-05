<?php
fscanf(STDIN, "%d%d%d%d", $a,$b,$c,$d);

if($a >= $x) {
	echo '1';
} else if($a < $x && $x <= $b) {
	echo $c / ($b - $a);
} else {
	echo '0';
}
