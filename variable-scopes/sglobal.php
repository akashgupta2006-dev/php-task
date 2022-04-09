<?php
// wap in php to show super global values 

$a=20;  // globals
$b=30;

print_r($GLOBALS);
function display(){
	$a=100;  //local
	$b=200;  //local
	echo PHP_EOL;
	echo "the value of a from local : $a";
	echo PHP_EOL;
	echo "the value of b from local : $b";
	
	echo PHP_EOL;
	echo "The value of a from global : {$GLOBALS['a']}"; //10
	echo PHP_EOL;
	echo "The value of b from global : {$GLOBALS['b']}";  //20
	
	$a = $GLOBALS['a']; // without using global keywords
	$b = $GLOBALS['b']; // without using global keywords
	echo PHP_EOL;
	echo "the value of a from without global : $a";
	echo PHP_EOL;
	echo "the value of a from without global : $b";
	echo PHP_EOL;
	global $a,$b;  //  using global Keyword
	echo PHP_EOL;
	echo "the value of a from global using global keyword : $a";
	echo PHP_EOL;
	echo "the value of a from global using global keyword : $b";
}
display();
?>