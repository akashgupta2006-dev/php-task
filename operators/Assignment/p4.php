<?php
// wap in php to show Assignment Operator....

$sum=5;
$x=2;
$sum=$sum%$x;
echo "The value without assignment Operator : $sum";
echo PHP_EOL;
$sum=5;
$x=2;
$sum%=$x;
echo " The value with assignment Operator : $sum";

?>