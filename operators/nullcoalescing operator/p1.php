<?php
//suppress operator @: suppress or notice Operator : error Operator.
// never use @ suppress operator
$x=20;
echo "The value of x : $x";
echo PHP_EOL;
echo "The value of  : ".@$y;

$z=10;
$z=isset($z)?$z:null;
echo PHP_EOL;
echo "he value of z using ternaary :".$z;
var_dump($z);
$z=isset($z)??null;
echo PHP_EOL;
echo "The value of z using  Nullcoalescing : ".$z;
var_dump($z);


$p=(5>2)??null;
echo PHP_EOL;
var_dump($p);
if($p){
	echo 'if running value  using  Nullcoalescing';
}else{
	echo 'else is running valu Nullcoalescing';
}

$p=(5>2)?'':null;
echo PHP_EOL;
var_dump($p);
if($p){
	echo 'if running value  using  ternary';
}else{
	echo 'else is running valu ternary';
}

?>