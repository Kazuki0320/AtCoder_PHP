<?php
fscanf(STDIN, "%d", $N);
$ans = '';
for ($i = 0; $i < $N; $i++) {
  $char = chr(65 + $i);
  $ans .= $char;
}
echo $ans;