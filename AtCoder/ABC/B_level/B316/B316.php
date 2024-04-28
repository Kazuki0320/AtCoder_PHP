<?php
    fscanf(STDIN, "%d", $month);
    $days = explode(" ", trim(fgets(STDIN)));

    $middleDay = (int)(ceil(array_sum($days) / 2));

    $accumulatedDays = 0;
    $resultMonth = 0;
    $resultDay = 0;
    for($j = 0; $j < count($days); $j++) {
        $accumulatedDays += $days[$j];
        if($accumulatedDays >= $middleDay) {
            $resultMonth = $j + 1;
            $remainingDays = $middleDay - ($accumulatedDays - $days[$j]);
            $resultDay = $remainingDays;
            break;
        }
    }
    echo $resultMonth . " " . $resultDay;
