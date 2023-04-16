<?php
//・htmlspecialcharsを短くする処理
function hsc($value) {
    return htmlspecialchars($value, ENT_QUOTES);
}
?>