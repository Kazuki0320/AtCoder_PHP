<?php
    fscanf(STDIN, "%d%d", $A, $B);

    $arr_p = [];
    $arr_c = [];
    $arr_f = [];
    for($i = 0; $i < $A; $i++) {
        $input = explode(" ", trim(fgets(STDIN)));
        $arr_p = $input[0];
        $arr_c = $input[1];
        $arr_f = array_slice($input, 2, $input[1]);
    }

    for($i = 0; $i < $A; $i++) {
        for($j = 0; $j < $A; $j++) {
            if($i == $j) continue;
            else {
                if($arr_p[$j] <= $arr_p[$i]) {
                    $allInclude = true;

                    for($k = 0; $k < $arr_c[$i]; $k++) {
                        $includeF = in_array($arr_f[$i][$k], $arr_f[$j]);
                        if(!$includeF) {
                            $allInclude = false;
                            break;
                        }
                    }
                    if($allInclude) {
                        sort($arr_f[$i]);
                        sort($arr_f[$j]);
                        if($arr_p[$j] < $arr_p[$i] || $arr_f[$j] !== $arr_f[$i]) {
                            echo "Yes";
                            exit;
                        } 
                    }
                }
            }
        }
    }

    echo "No";
