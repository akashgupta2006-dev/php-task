<?php
// wap in php to show mullable datatype

$x=null; //it does not exist at_all
echo PHP_EOL;
var_dump($x);
echo $x;
echo getType($x);
echo PHP_EOL;
var_dump(is_null($x));
var_dump(empty($x));

var_dump($x==null);
var_dump($x===null);
var_dump(''==null);
var_dump(''===null);

echo 'very very Important';
$y='';
var_dump($y);
var_dump(isset($y));
var_dump(isset($w));
var_dump(empty($x));
var_dump(isset($x));
var_dump($w)); //null --> no memory
var_dump($x));
?>