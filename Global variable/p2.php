<?php
// wap in php to check array is homogenous or hetrogenous
function is_homo($array=[]){
	$key_type=getType($array[0]);
	for($i=0;$i<count($array);$i++){
		//echo getType($array[i]);
		//echo PHP_EOL;
		if($key_type===getType($array[$i]))
		{
			
		}
		else
		{
			return false;
			
		}
	}
	return true;
	
}
var_dump(is_homo($argv));
var_dump(is_homo([10,20,30,40]));
var_dump(is_homo([10,10.5,true,false,'ravi','AKASH']));
var_dump(is_homo(['ritesh','ravi','AKASH']));

?>