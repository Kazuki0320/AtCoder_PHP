<?php
  fscanf(STDIN, "%s", $S);

  for ($i = 0; $i < strlen($S); $i++) {
      if ('a' <= $S[$i] && $S[$i] <= 'z') {
          echo strtoupper($S[$i]);
      }
  }
?>
