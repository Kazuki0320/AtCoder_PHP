<?php

fscanf(STDIN, "%d %d", $N, $M);

$As = [];
$Bs = [];

for($i = 1; $i <= $M; ++$i){
  fscanf(STDIN, "%d %d", $As[$i], $Bs[$i]);
}

$stronger = [];
for($i = 1; $i <= $N; ++$i){
  if(!in_array($i, $Bs)){
    $stronger[] = $i;
    var_dump($stronger);
  }
}

if(count($stronger) === 1){
  echo $stronger[0] . "\n";
} else {
  echo "-1" . "\n";
}
