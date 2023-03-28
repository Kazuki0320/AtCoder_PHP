<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>
<?php if($time < 17): ?>
	<p>※営業時間外です</p>
<?php else: ?>
	<p>ようこそ</p>
<?php endif; ?>

<?php 
$s = '';
if($s)://$s !== ''
	echo '$sには文字が入ってます'. '<br>';
endif;

$x = 10;
/*この条件文では、$xが0と等しい場合に真(true)となるため、「!$x」が偽(false)となり、条件式が成立します。
そして、その結果として、「$xは0です」という文字列が表示されます。*/
if(!$x):// $x === 0
	echo '$xは0です';
endif;
?>
