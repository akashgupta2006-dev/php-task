<?php
// wap in php to nullable and empty
$x='';
var_dump($x);

echo PHP_EOL;
var_dump($x=='');
echo PHP_EOL;
var_dump($x=="");
echo PHP_EOL;
var_dump($x==='');
echo PHP_EOL;
var_dump($x==="");
echo PHP_EOL;
var_dump(empty($x));
echo PHP_EOL;
var_dump(empty(''));
echo PHP_EOL;
var_dump(empty(""));
$y="";
var_dump($y);
echo PHP_EOL;
var_dump($x==$y);
echo PHP_EOL;
var_dump($x===$y);

echo 'Be aware B/w empty and "<space>"';
echo PHP_EOL;
printf("The value from empty : ",'');
echo PHP_EOL;
printf("The value from empty : ",' ');
echo PHP_EOL;
var_dump(''==' ');
var_dump(''===' ');

echo PHP_EOL;
echo '';
echo PHP_EOL;
echo getType('');
echo PHP_EOL;
echo strlen('');
echo PHP_EOL;
echo ' ';
echo PHP_EOL;
echo ord(''); //Ascii
echo PHP_EOL;
echo strlen(' ');
echo PHP_EOL;
echo getType(' ');
echo PHP_EOL;
echo ord('a'); //Ascii
?>





