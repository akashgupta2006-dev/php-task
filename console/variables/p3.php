<?php
// wap in php to boolian data typees stored in variables

$x=true;
echo $x;
echo PHP_EOL;
echo getType($x); // boolian
echo PHP_EOL;
var_dump($x); // bool true

$z=TRUE;
echo $z;
echo PHP_EOL;
echo getType($z);
echo PHP_EOL;
var_dump($z);

echo PHP_EOL;

$y=TrUe;
echo $y;
echo PHP_EOL;
echo getType($y);
var_dump($y);

echo PHP_EOL;
echo 'On Comparing all the three value';
echo PHP_EOL;
echo(true==TRUE);
echo PHP_EOL;
echo (True==TRUE);
echo PHP_EOL;
echo (1==true);
echo PHP_EOL;
var_dump(1===true);
?>