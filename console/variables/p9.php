<?php
//wap in php to show the difference B/W null and undefined 

$y=;
echo $y;
echo PHP_EOL;
var_dump($y);
var_dump(isset($y));
echo PHP_EOL;
printf("The memory y =%d",memory_get_usage($y)); 
unset($y);
printf("The memory y =%d",memory_get_usage($y)); 

$z=;
echo $z;
echo PHP_EOL;
var_dump($z);
var_dump(isset($z));
echo PHP_EOL;
printf("The memory z =%d",memory_get_usage($z)); 
unset($z);
printf("The memory z =%d",memory_get_usage($z)); 

?>