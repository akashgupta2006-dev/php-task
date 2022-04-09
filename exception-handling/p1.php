<?php
// wap in php to show Exception Handling
$x = readline('Enter the first number : ');
$y = readline('Enter the second number : ');

try{
	echo "Block of Try Started...\n";
	
	$result = $x/$y;
	
	echo "Block of Try ended...\n";
	
}catch(Exception $e){
	echo "some Exception Raised".$e->getMessage();
}finally{
	echo "This Block will be, execute...";
	echo "The result = $result \n";
}

?>