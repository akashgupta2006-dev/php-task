<?php
//WAP in php to find reminder without % 
//Dividend = Divisor *

$x=readline('Enter the x value : ');
$y=readline('Enter the y value : ');

//without using (%) modular get reminder famula
$Q=(int)($x/$y); // Quotient
$rem=$x-($Q*$y);
echo PHP_EOL;
echo "The remoinder without using modulo : $rem";
?>