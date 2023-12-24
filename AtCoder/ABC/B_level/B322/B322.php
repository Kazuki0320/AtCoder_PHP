<?php
  fscanf(STDIN, "%d %d", $N, $M);

  $S = trim(fgets(STDIN));
  $T = trim(fgets(STDIN));

  if(strpos($T, $S) === 0 && strpos(strrev($T), strrev($S)) === 0) {
    echo "0";
  } else if(strpos($T, $S) === 0) {
    echo "1";
  } else if(strpos(strrev($T), strrev($S)) === 0) {
    echo "2";
  } else {
    echo "3";
  }
?>