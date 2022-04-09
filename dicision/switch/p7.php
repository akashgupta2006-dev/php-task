<?php 
// wap in php to show chained

$x=readline("Enter the charecter :");
$i=0;
switch($n){
	case 1:	
		echo "case1 ".$i++."is executing \n";
		goto exit_label;
	case 2:	
		echo "case2 ".$i++."is executing \n";
	case 3:	
		echo "case3 ".$i++."is executing \n";
	case 4:	
		echo "case4 ".$i++."is executing \n";
	case 5:	
		echo "case5 ".$i++." isexecuting \n";
	case 6:	
		echo "case $n is executing \n";
	case 7:	
		echo "case $n is executing \n";
	case 8:
			echo "case $n is executing \n";
	case 9:	
		echo "case $n is executing \n";
	default:
			echo "default $n is executing \n";
}
exit_label:
?>