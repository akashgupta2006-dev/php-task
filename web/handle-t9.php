<?php
$num1=$_REQUEST["num1"];
$num2=$_REQUEST["num2"];

$a1=(float)($num1/$num2);
$a2=(int)$a1*$num2;
$res=(int)$num1-$a2;
printf("The reminder of : %d",$res);

?>