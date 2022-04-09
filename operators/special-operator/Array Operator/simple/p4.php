<?php
// wap in php to + operator in array
$x=[10,20,30,'Akash'];

$y[4]=100;
$y[5]=200;
$y[6]=300;
$y[7]=400;

echo "the count of x ".count($x);
echo PHP_EOL;
echo "the count of x ".count($y);
echo PHP_EOL;
//var_dump(count($x)==count($y));
print_r($x+$y);  //unique
print_r($y+$x);  //unique

var_dump(($x+$y)==($y+$x));//equal
var_dump(($x+$y)==($x));//equal
var_dump(($x+$y)===($x));//equal

var_dump(($y+$x)==($y));
var_dump(($y+$x)===($y));

var_dump(($x+$y)!==($y+$x));
var_dump(($x+$y)===($y+$x));


 //strict equality equal and not identical
var_dump(($x+$y)===($x+$y));	//equal and identical
var_dump(($y+$x)===($y+$x));	//equal and identical

?>