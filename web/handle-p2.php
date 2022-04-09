<?php
#print_r($_REQUEST);
#print_r($_REQUEST); #super global variable (predefine in php)
$name=$_REQUEST['name'];
//echo $name;
printf("Hy WELCOME ! Mr. \t %s", $name);
?>