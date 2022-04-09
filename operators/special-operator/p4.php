<?php
// wap in php to show string multiplication append Operator in string
function string_multiply($str='',$n=0)
{
if($n==0){
	return $str;
}
$x='';
for ($i=0;$i<$n;$i++)
{
	$x.=$str;	
}
return $x;
}
$a = readline('Enter a string : ');
$n = readline('How many types to be reapeated : ');
echo string_multiply($a,$n);
?>