<?php
//wap in php to show multi-level class
class A{
	public function _construct(){
	$this->doA();
	}
	
public function doA(){
echo 'A work is done at 1st level class';	
echo PHP_EOL;
}
}
class B{
	public function _construct(){
	$this->doB();
	}
public function doB(){
echo 'B work is done at 2nd level class';	
echo PHP_EOL;
}
}

class C{
public function _construct(){
$this->doC();
	}
public function doC(){
echo 'C work is done at 3rd level class';	
echo PHP_EOL;
}
}
$a = new A();
$b = new B();
$c = new C();
 ?>
 
 
 
 
 
 