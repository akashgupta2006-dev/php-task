<?php
$num1=$_REQUEST["num1"];
$num2=$_REQUEST["num2"];
$num3=$_REQUEST["num3"];
$num4=$_REQUEST["num4"];
$num5=$_REQUEST["num5"];

$add=($num1+$num2+$num3+$num4+$num5);
$res=($add*100/500);
printf("Total Number Of 5 subject : %d",$add);
printf("<br/>Total percentage of : %d",$res);

?>