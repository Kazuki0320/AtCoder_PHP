<?php
    fscanf(STDIN, "%d %d", $H, $W);
    fscanf(STDIN, "%d %d", $Si, $Sj);

    $grid = [];
    for($i = 0; $i < $H; $i++) {
        $grid [] = trim(fgets(STDIN));
    }
    $X = trim(fgets(STDIN));

    $currentRow = $Si - 1;
    $currentCol = $Sj - 1;

    foreach(str_split($X) as $move) {
        $newRow = $currentRow;
        $newCol = $currentCol;

        if($move == 'L') $newCol--;
        if($move == 'R') $newCol++;
        if($move == 'U') $newRow--;
        if($move == 'D') $newRow++;

        if($newRow >= 0 && $newRow < $H && $newCol >= 0 && $newCol < $W && $grid[$newRow][$newCol] == ".") {
            $currentRow = $newRow;
            $currentCol = $newCol;
        }
    } 

    echo ($currentRow + 1) . ' ' . ($currentCol + 1)
