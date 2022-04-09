<?php
// wap in php to sort a array with 2 elements
$a=[30,5,10];
print_r($a);
for($j=0;$j<count($a);$j++){
for($i=$j+1;$i<count($a);$i++){
	if($a[$j]>$a[$i]){
		$temp=$a[$i];
		$a[$i]=$a[$j];
		$a[$j]=$temp;
}
}
}
print_r($a);
?>