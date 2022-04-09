<?php
//wap in php to find the qudrant according to given, Quadrant conditions.
$x=readline("Enter x the no :");
$y=readline("Enter y the no :");
if($x>0 and $y>0)
{
	echo "1st Qudrant";
}
else if($x>0 and $y<0)
{
	echo "4th Qudrant";
}
else if($x<0 and $y>0)
{
	echo "2nd Qudrant";
}
else
{
	echo "3rd";
}


?>