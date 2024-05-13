<?php
$n=trim(fgets(STDIN));
$i=0;
while($i<$n){
  $a[]=explode(" ",trim(fgets(STDIN)));
  ++$i;
}
$i=0;
while($i<$n){
  $b[]=explode(" ",trim(fgets(STDIN)));
  ++$i;
}
$ans=array(1,1,1,1);
//chatGPT君に書いてもらったfunctionをコピーし忘れました(1RE)
//printを消し忘れました(1WA)
for ($r = 0; $r < 4; $r++) {  // 回転を 4 回繰り返す
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            // A[i][j] = 1 ならば B[i][j] も 1 であることを確認する
            if ($a[$i][$j] == 1 && $b[$i][$j] == 0) {
                $ans[$r]=-1;
            }
        }
    }
    // A を回転させる
    $a = rotate($a, $n);
}
echo (max($ans)==1)? "Yes":"No";

// 行列を時計回りに 90 度回転する関数
function rotate($a, $n) {
    $result = [];
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $result[$j][$n-1-$i] = $a[$i][$j];
        }
    }
    return $result;
}
