<?php
$cards = explode(" ", trim(fgets(STDIN)));
$cards_result = array_count_values($cards);
if ((in_array(3, $cards_result) && in_array(2, $cards_result)) || (in_array(2, $cards_result) && in_array(3, $cards_result))) {
    echo "Yes";
    exit;
}
echo "No";
?>

