<?php
$S = strrev(trim(fgets(STDIN)));

for($i = 0; $i < strlen($S); $i++) {
    if($S[$i] === 'a') {
        $result = strlen($S)-$i;
        echo $result;
        exit;
    }
}
echo -1;
?>
