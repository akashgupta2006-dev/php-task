<?php

$fp = fopen('akash.txt','r');
$txt=fgets($fp,1024);
echo $txt;
?>