<?php
// Your code here!
fscanf(STDIN, "%d %d", $n, $d);
$s = [];
for($i=0;$i<$n;$i++){
    $s[] = str_split(trim(fgets(STDIN)));
}

$ans = 0;
$cnt = 0;
for($i=0;$i<$d;$i++){
  $flag = true;
  for($j=0;$j<$n;$j++){
    if($s[$j][$i] == "x"){
      $flag = false;
    }
  }
 
  if($flag == true){
    $cnt++;
  }else{
    $ans = max([$cnt, $ans]);
    $cnt = 0;
  }
}
$ans = max([$cnt, $ans]);
echo $ans;

?>

