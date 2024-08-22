<?php
    fscanf(STDIN, "%d%d", $N, $X);
    $S = str_split(trim(fgets(STDIN)));
    foreach($S as $answer) {
        if($answer == "o") {
            $X += 1;
        } else {
            $X -= 1;
        }

        if($X < 0) {
            $X = 0;
        }
    }

    echo $X;
