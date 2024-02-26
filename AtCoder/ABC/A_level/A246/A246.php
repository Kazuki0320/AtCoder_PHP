<?php
function pointA(){
    fscanf(STDIN,"%d %d",$x1,$y1);
    fscanf(STDIN,"%d %d",$x2,$y2);
    fscanf(STDIN,"%d %d",$x3,$y3);
    $ansX = 0;
    $ansY = 0;
    
    if($x1 == $x2){
        $ansX = $x3;
    }elseif($x1 == $x3){
        $ansX = $x2;
    }elseif($x2 == $x3){
        $ansX = $x1;
    }
    if($y1 == $y2){
        $ansY = $y3;
    }elseif($y1 == $y3){
        $ansY = $y2;
    }elseif($y2 == $y3){
        $ansY = $y1;
    }
    printf("%d %d",$ansX,$ansY);
}

pointA();


