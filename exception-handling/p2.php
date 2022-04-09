<?php
// wap in php to show Exception Handling
$x = readline('Enter the first number : ');
$y = readline('Enter the second number : ');
$result=0;
try{
	echo "Block of Try Started...\n";
	if($y==0){
		throw new Exception;
	}else{
		$result = $x/$y;
	}
	echo "Block of Try ended...\n";
	
}catch(Exception $e){
	echo "some Exception Raised".$e->getMessage();
	echo "\n";
}finally{
	echo "This Block will be, execute... \n";
	echo "The result = $result \n";
}

?>