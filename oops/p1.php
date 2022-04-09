<?php
//wap in php to show sequential nature of else-if ladder
class Test
{
	public $a;
	public function __construct()
	{
		$this->a=10;
		echo 'called constructor automatically';
		echo PHP_EOL;
	}
	public function wish()
	{
		echo 'hy good morning'.PHP_EOL;
	}
	public function __destruct()
	{
		echo 'called destruct automatically';
		echo PHP_EOL;
		unset ($this->a);
		$this->show-a();
	}
	public function show-a();
	{
		echo "the value of a optered -- called".$this->a;
	}
}


?>