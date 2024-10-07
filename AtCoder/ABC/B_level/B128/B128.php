<?php
    // 入力の受け取り
    fscanf(STDIN, "%d", $N);
    $restaurants = [];
    
    for($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%s%d", $city, $score);
        $restaurants []= [
            'city' => $city,
            'score' => $score,
            'index' => $i + 1
        ];
    }
    
    //　ソート処理
    usort($restaurants, function($a, $b) {
        if ($a['city'] == $b['city']) {
            // 同じ市の場合、点数の降順でソート
            return $b['score'] - $a['score'];
        }
        // 市名の順序でソート
        return strcmp($a['city'], $b['city']);
    });
    

    // 結果の出力
    foreach ($restaurants as $restaurant) {
        echo $restaurant['index'] . "\n";
    }
