<?php
$pa=$_REQUEST["num1"];
$rate=$_REQUEST["num2"];
$time=$_REQUEST["num3"];
$SI=(($pa*$rate*$time)/100);
printf("Simple Enterest : %.2f",$SI);


?>