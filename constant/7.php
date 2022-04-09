<?php
//wap in php to show constant are global 

define('GRAVITY','10');
printf("tHE VALUE OF GRAVITY : %d \n",GRAVITY);
$gravity=9.8;
printf("the value of gravity: %d \n",$gravity);


function test()

{
	printf("the value of GRAVITY AT LOCAL SCOPE : %d \n",GRAVITY);
	printf("the value of GRAVITY AT LOCAL SCOPE : %d \n",$gravity);
	
}
test();
?>