<?php
    fscanf(STDIN, "%d", $N);
    
    $data = [];
    for($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%s %d", $name, $rate); 
        
        $data [] = ['name' => $name, 'rate' => $rate];
    }
    var_dump($data);
    
    // 名前を辞書順に並べる
    usort($data, function($a, $b) {
        return strcmp($a['name'], $b['name']);
    });
    var_dump($data);
    
    // レートの合計を計算
    $sum = array_sum(array_column($data, 'rate'));
    $number = $sum % $N;
    
    // 辞書順に並べた名前の $number 番目を出力
    echo $data[$number]['name'] . PHP_EOL;

