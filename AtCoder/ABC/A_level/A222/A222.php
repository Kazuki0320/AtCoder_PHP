<?php
	fscanf(STDIN, "%d", $n);
	if(strlen($n) === 1) echo 0 . 0 . 0 . $n;
	if(strlen($n) === 2) echo 0 . 0 . $n;
	if(strlen($n) === 3) echo 0 .  $n;
	if(strlen($n) === 4) echo $n;

