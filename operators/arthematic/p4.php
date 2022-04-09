<?php
//WAP in php to find reminder without % 
//Dividend = Divisor *

$x=readline('Enter the x value : ');
$y=readline('Enter the y value : ');

//without using (%) modular get reminder famula
$Q=($x/$y); // Quotient
//$rem=$x-($Q*$y);
$A=sprintf("Q = %d",$Q);
echo PHP_EOL;
$B=sprintf("Q = %f",$Q);
echo PHP_EOL;
$C=sprintf("Q = %.2f",$Q);


echo $A;
echo PHP_EOL;
echo $B;
echo PHP_EOL;
echo $C;

echo PHP_EOL;
$rem= $x-($A*$y);
echo $rem;

?>