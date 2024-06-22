<?php
    fscanf(STDIN, "%d%d%d%d", $N, $X, $Y, $Z);

    $students = [];
    $math_scores = explode(" ", trim(fgets(STDIN)));
    $english_scores = explode(" ", trim(fgets(STDIN)));

    for($i = 0; $i < $N; $i++) {
        $students[$i]['math'] = (int)$math_scores[$i];
        $students[$i]['english'] = (int)$english_scores[$i];
        $students[$i]['total'] = $students[$i]['math'] + $students[$i]['english'];
        $students[$i]['index'] = $i + 1;
    }
    
    $passed = [];

    // Math top X
    usort($students, function($a, $b) {
        if ($a['math'] == $b['math']) {
            return $a['index'] - $b['index'];
        }
        return $b['math'] - $a['math'];
    });
    
    
    for ($i = 0; $i < $X; $i++) {
        $passed[] = $students[$i]['index'];
        $students[$i]['passed'] = true;
    }
    
    $students = array_filter($students, fn($s) => !isset($s['passed']));
    
    // English top Y
    usort($students, function($a, $b) {
        if ($a['english'] == $b['english']) {
            return $a['english'] - $b['english'];
        }
        return $b['english'] - $a['english'];
    });
    
    for ($i = 0; $i < $Y; $i++) {
        $passed[] = $students[$i]['index'];
        $students[$i]['passed'] = true;
    }
    
    $students = array_filter($students, fn($s) => !isset($s['passed']));
    
    // Total top Z
    usort($students, function($a, $b) {
        if ($a['total'] == $b['total']) {
            return $a['index'] - $b['index'];
        }
        return $b['total'] - $a['total'];
    });

    for ($i = 0; $i < $Z; $i++) {
        $passed[] = $students[$i]['index'];
    }
    
    // Sort passed students by index
    sort($passed);

    foreach ($passed as $index) {
        echo $index . PHP_EOL;
    }
    
