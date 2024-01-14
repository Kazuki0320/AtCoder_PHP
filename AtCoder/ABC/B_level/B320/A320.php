//ChatGPT answers
<?php
fscanf(STDIN, "%s", $S);
$len = strlen($S);
$revs = strrev($S);
$dp = array_fill(0, $len + 1, array_fill(0, $len + 1, 0));

$ans = 1;

for ($i = 1; $i <= $len; $i++) {
    for ($j = 1; $j <= $len; $j++) {
        if ($S[$i - 1] === $revs[$j - 1]) {
            $dp[$i][$j] = $dp[$i - 1][$j - 1] + 1;
            $ans = max($ans, $dp[$i][$j]);
        } else {
            $dp[$i][$j] = 0;
        }
    }
}

echo $ans;
?>

//Other people's answers
<?php

$s = str_split(trim(fgets(STDIN)));

$count = 0;
$ans = 0;
for ($i=0; $i < count($s); $i++) { 
  for ($j=$i; $j < count($s); $j++) {
    if(is_palindrome($s, $i, $j))$ans = max($ans, $j - $i + 1);
  }
}
echo $ans . PHP_EOL;

function is_palindrome($s, $i, $j) {
  $slice = array_slice($s, $i, $j - $i + 1);
  return $slice == array_reverse($slice);
}
?>
