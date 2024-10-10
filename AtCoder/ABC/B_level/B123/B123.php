<?php
  $sum = 0;
  $amax = 0;
  for ($i=0; $i<5; $i++) {
    fscanf(STDIN, "%d", $a);
    $sum += (int)(($a+9)/10)*10;

    if ($a%10 != 0) {
	  $amax = max($amax, 10 - $a%10);
    }
  }
  echo $sum - $amax . "\n";
?>
