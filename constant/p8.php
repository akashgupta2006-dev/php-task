<?php
//wap in php to show constant are global inside class_alias



define('GRAVITY','10');
printf("tHE VALUE OF GRAVITY : %d \n",GRAVITY);
$gravity=9.8;
printf("the value of gravity: %d \n",$gravity);


class Test{
	
	private $g;
	private $G;
	
	public function __construct(){
		
		$this->G=GRAVITY;
		$this->g=$gravity; //  variable $#gravity local
	
		printf("The value of GRAVITY inside method :%d \n",GRAVITY);
		printf("The value of gravity inside method :%d \n",$gravity);
		
		printf("The value of Gravity using g for class  :%d \n",$this->g);
		printf("The value of Gravity using G for class  :%d \n",$this->G);
			
		
	}
	
}
$test = new Test();

?>