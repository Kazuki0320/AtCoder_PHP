<?php
$m  = fgets(STDIN);
$d = explode(" ", trim(fgets(STDIN)));

$zorome_count = 0;
for($i = 1; $i <= $m; $i++) {
    for($j = 1; $j <= $d[$i - 1]; $j++) {
      $i_digits = str_split($i);
      $j_digits = str_split($j);
      
      $digits = array_unique(array_merge($i_digits, $j_digits));
      if(count($digits) === 1) {
        $zorome_count++;
      }
    }
  }
  echo $zorome_count;
?>