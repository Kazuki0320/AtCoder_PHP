<?php
[$N, $C] = fscanf(STDIN, "%d %d");
$S = explode(" ", trim(fgets(STDIN)));
$new = "";
for($i = $C; $i <= $N; $i++) {
    if($i < $N) {
        $S[$i] .= " ";
		$S[$i] .= "0";
		$new = $S[$i];
    } else {
        $new .= " ";
        $new .= "0";
    }
}
echo $new;
?>
