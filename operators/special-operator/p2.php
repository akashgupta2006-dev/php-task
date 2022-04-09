<?php
//wap in php to show Modify Operators

$x=10;
$x=$x-1;
echo " The value of without Assignment operator : $x \n";

$x=10;
$x-=1;
echo " The value of without Assignment operator : $x \n";

$x=10;
$z=$x--;
echo " The value of post Increment operator : $x and $z \n";

$x=10;
$z=--$x;
echo " The value of x using pre Increment operator : $x and $z \n";
?>