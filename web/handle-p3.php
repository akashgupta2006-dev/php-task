<?php
#print_r($_REQUEST);
#print_r($_REQUEST); #super global variable (predefine in php)
$name=$_REQUEST['name'];
$name2=$_REQUEST['name2'];
//echo $name;
printf(" result of %s", $name+$name2);
?>