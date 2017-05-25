<?php
if (file_exists('./upload'))
foreach (glob('./upload/*') as $file)
unlink($file); 
  
$var = 'Файлы из каталога успешно удалены';
print '<script>alert("'.$var.'");location.reload();</script>' 
?>