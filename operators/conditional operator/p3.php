<?php
//wap in php to find 
$n=readline('Enyer the n value : ');
$sum=0;
for($i=1;$i<$n;$i++)
{
	if($n%$i==0)
	{
		$sum=$sum + $i;
	}
}
if($sum==$n)
{
	echo 'No is perfact';
}
else
{
	echo 'No is not Perfact';
}


?>