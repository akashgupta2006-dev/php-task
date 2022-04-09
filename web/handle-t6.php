<?php
$length=$_REQUEST["num1"];
$width=$_REQUEST["num2"];
$area=($length*$width);
$perimeter=(($length+$width)*2);
printf("Area Of Rectangle  : %.2f",$area);
printf("<br/>Value  of perimeter : %.2f",$perimeter);


?>