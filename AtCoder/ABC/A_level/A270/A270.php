<?php
$input = trim(fgets(STDIN));
list($a_score, $b_score) = explode(' ', $input);

// $B3FLdBj$NG[E@$rDj5A(B
$score_list = [1, 2, 4];

$c_score = 0;
for ($i = 0; $i < 3; $i++) {
    // A$B7/$+(BB$B7/$,2r$1$?LdBj$N$_!"(BC$B7/$b2r$/$3$H$,$G$-$k(B
    if (($a_score & $score_list[$i]) || ($b_score & $score_list[$i])) {
        $c_score += $score_list[$i];
    }
}

echo $c_score; // C$B7/$N9g7WE@?t$r=PNO(B
?>
