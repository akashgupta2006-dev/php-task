<?php
// wap in php to show here doc string syntax.

$a=100;

echo <<<BLOCK
This a here  DOC String. $a \n 
	"This is again New Line of string "$a" "
'This string is inside $a single Qoutos \t tabbed' = $a
BLOCK;
$html =<<<ANYBLOCK
This a here  DOC String. $a \n 
	"This is again New Line of string "$a" "
'This string is inside $a single Qoutos \t tabbed' = $a
ANYBLOCK;

echo $html;
?>