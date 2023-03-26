<?php
date_default_timezone_set('Asia/Tokyo');
//文字列連結をドットでやった場合
echo '現在は'.date('G時 s分 i秒').'です';
//文字列連結をカンマでやった場合
echo '現在は',date('G時 s分 i秒'),'です';