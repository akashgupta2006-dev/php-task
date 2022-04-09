<?php
// wap in php to show example of if-else.

$a=readline('Enter the a value');
if($a>2){$x='hi';}else{$x='hello';}
echo "The value of x using if-else $x \n";

$x=($a>2)?'hi':'Hello'; // R_L
echo "The value of x using ternary $x \n";
$x=($a>2)?$x='hi':$x='Hello';  //L-R

echo "The value of x using ternary $x \n";

?>