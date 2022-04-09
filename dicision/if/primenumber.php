<?php
$num = readline("Enter the nubmber : ");
$count=0;
for($i=2;$i<$num;$i++){
	
	if(($num%$i)==0){
		$count++;
	}
	
}
if($count<3){
	echo "$num is a prime number ";
}
else{
	echo "$num is a not prime number "; 
}





?>