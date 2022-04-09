<?php

// is-relationship

class A{
public function ktm_bike(){	
	echo 'This is a KTM Bike...'.PHP_EOL;
}	
}

Class B {
public function cycle(){	
	echo 'This is a cycle...'.PHP_EOL;
}
 public function ktm_bike(){
$a = new A();
$a->ktm_bike();

}	
}
$b = new B();
$b->cycle();
$b->ktm_bike();

$a = new A();
$a->ktm_bike();
?>