<?php
// wap in php to print odd even with variable
$output='odd';
$n = readline('Enter the number : ');
if($n%2==0){
	$output='even';
}
echo $output;
?>