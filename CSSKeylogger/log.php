<?php

$data = $_POST['data'];
$f = fopen('log', 'w+');
fwrite(f, $data);
fclose($f);
  
  
?>