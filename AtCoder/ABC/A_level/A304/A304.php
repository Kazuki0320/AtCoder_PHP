<?php
	fscanf(STDIN, "%d", $n);

	$list = [];
	while($arr = trim(fgets(STDIN))){
    $arr = explode(' ', $arr);
    $list[] = ['name' => $arr[0], 'age' => (int)$arr[1]];
    }
	
	//年齢が最も小さい人を見つける
	$youngest = min(array_column($list, 'age'));
	
	//年齢が最も小さい人のインデックスを取得
	$start_index = array_search($youngest, array_column($list, 'age'));
	
    //時計回りに順番に出力
    for($i = 0; $i < $n; $i++) {
        $index = ($start_index + $i) % $n;
        echo $list[$index]['name'] . "\n";
    }
?>