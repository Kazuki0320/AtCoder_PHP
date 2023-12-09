<?php
  fscanf(STDIN, "%s", $s);
  $m = "";

  for ($i = 0; $i < strlen($s); $i++) {
    $currentChar = $s[$i];
    if ($currentChar === "a" || $currentChar === "i" || $currentChar === "u" || $currentChar === "e" || $currentChar === "o") {
        continue;
    } else {
        $m .= $currentChar;
    }
  }
  echo $m;
?>
