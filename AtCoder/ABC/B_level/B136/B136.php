<?php
    $N = intval(trim(fgets(STDIN)));
    function countDigitNumbers($N) {
        $count = 0;
        
        for ($i = 1; $i <= $N; $i++) {
            $digit = strlen((string)$i);

            if ($digit % 2 !== 0) {
                $count++;
            }
        }
        
        return $count;
    }
    
    echo countDigitNumbers($N) . PHP_EOL;
