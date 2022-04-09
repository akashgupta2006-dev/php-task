<?php
// wap in php to string concatenetion 

$x='Akash';
$y='Gupta';

var_dump(gettype($x));
var_dump(gettype($y));
var_dump($x.$y);
var_dump(gettype($x.$y));

$x=10;
$y=20;
var_dump($x.$y);
var_dump(gettype($x.$y));

$result='The sum is= ';
echo $result.($x+$y);

// note : PHP allows mathematical evalution only after using () brackets other wise not-numeric
// Encounterd will thrown 
?>