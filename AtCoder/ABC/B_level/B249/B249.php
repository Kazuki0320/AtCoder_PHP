<?php
// 標準入力から文字列を読み取り
$str = trim(fgets(STDIN));

$hasUpperCase = false;
$hasLowerCase = false;
$charCount = [];

$flag = true;

// 文字列の各文字をチェック
for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    
    // 英大文字が含まれているかをチェック
    if (ctype_upper($char)) {
        $hasUpperCase = true;
    }
    
    // 英小文字が含まれているかをチェック
    if (ctype_lower($char)) {
        $hasLowerCase = true;
    }
    
    // 文字の重複をチェック
    if (array_key_exists($char, $charCount)) {
        $flag = false; // 重複があればフラグを下げる
        break;
    }
    $charCount[$char] = true;
}

// すべての条件を満たしているかチェック
if ($hasUpperCase && $hasLowerCase && $flag) {
    echo "Yes";
} else {
    echo "No";
}
