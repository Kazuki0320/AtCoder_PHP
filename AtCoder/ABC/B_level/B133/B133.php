<?php
list($N,$D) = explode(' ',trim(fgets(STDIN)));
$ans = 0;

for($i = 0; $i < $N; $i++){
    $X[] = explode(' ',trim(fgets(STDIN)));
}

for($i = 0; $i < $N; $i++){
    for($j = $i + 1; $j < $N; $j++){
        $dis = 0;
        
        for($k = 0; $k < $D; $k++){
            $dis += pow($X[$i][$k] - $X[$j][$k],2);
        }
        
        if(pow($dis,1/2) == floor(pow($dis,1/2))){
            $ans++;
        }
    }
}

echo $ans;
