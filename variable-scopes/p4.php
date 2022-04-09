<?php
// wap in php to show global scope defined from local scope 
	$a=10;
	echo "the value from a global : $a";
	echo PHP_EOL;
function test1(){
	global $a;
//	global $b;
	$b=30;
	echo "the value from a global test1 : $a";
	echo PHP_EOL;
	echo "the value from b local inside test1 : $b";
		echo PHP_EOL;
}
test1();

echo "the value from b global scope outside : $b";
	echo PHP_EOL;
	$b=100;
function test2(){
	global $a;
	global $b;
	echo "the value from a global  inside test2 : $a";
	echo PHP_EOL;
	echo "the value of b from global test2 : $b";
}
test2();

?>