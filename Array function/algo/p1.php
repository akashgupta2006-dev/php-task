<?php
// wap in php to sort.
$a = [10];
$a = [10,20];
$a = [10,30,20,100,50,70,45,100,80];
for($j=0;$j<count($a);$j++){
		for($i=$j+1;$i<count($a);$i++){
			if($a[$j]>$a[$i]){	
				$temp = $a[$i];
				$a[$i] = $a[$j];
				$a[$j] = $temp;
			}
		}
	}
	print_r($a);
?>