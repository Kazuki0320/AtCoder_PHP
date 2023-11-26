<?php
  $fileInput  = (int)fgets(STDIN);
  
for($i = 1; $i <= 18; $i++) {
  if($i ** $i === $fileInput){
    exit((string)$i);
  }
}
echo ((string)-1);
?>
