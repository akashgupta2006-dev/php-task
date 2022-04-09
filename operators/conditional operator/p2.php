<?php
// wap in php to mod value
$a=readline('Enter the a value : ');


$x=($a>0)? ($a):(-$a);
echo "mod $|x| value : $x";

//odd even 
echo PHP_EOL;
$x=($a%2==0)? 'even': 'odd';  //L-R

echo "The value of  $x \n";
// wap to find +ve -ve
$x=($a>0)?++$a:--$a;

echo $x;

?>