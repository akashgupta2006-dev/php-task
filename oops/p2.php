<?php
//wap in php to show sequential nature of else-if ladder
class Test{
	public $a=300; // non-static
	public static $b=400;	//static context
	public function get_a(){  // not static method
	echo "The value from non static context = {$this ->a} \n";
	echo "The value from non context = ";
	// echo Test::$a; #error duo to accessing non-static a from static context
	echo PHP_EOL; 
}
public static function get_b() { #static method
// echo  "the value from Non static context {$this->a} \n";
echo PHP_EOL;
echo "The value from static context = ";
echo Test::$b;
// echo $this->b; #error duo to $this object Context for static context base64_decode
}
}
$test = new Test();
$test->get_a();
// Test::get_a();  # error get_a scope non static it cannot be called by class context
$test->get_b();
Test::get_b();
?>