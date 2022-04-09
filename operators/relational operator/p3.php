<?php
//wap in php to find 
$n=readline('Enyer the n value : ');
if(is_perfect($n)){
	echo "$n is perfact no.";
}
else{
	echo "number is not perfact ..";
}
function is_perfect($n,$i=1,$sum=0){
	if($i==$n){
		return false;
	}
	else{
		if($n % $i==0)
		{
			$sum=$sum+$i;
		}
		if($sum==$n){
			return true;
		}
		return is_perfect($n,$i+1,$sum);
	}
}

?>