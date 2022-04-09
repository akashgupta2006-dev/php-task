<?php
$emp=array(
	array(1,"Akash","CS",2000,1),
	array(2,"shiv","CS",3000,1),
	array(3,"sandeep","CS",4000,1),
	array(4,"vipin","CS",5000,1),
	array(5,"reetesh","CS",5000,1),
	array(5,"reetesh","CS",5000,1),
	array(5,"reetesh","CS",5000,1),
	array(5,"sudhir","CS",5000,1)

);
echo "<table border='2px' >";
echo "<tr>";
	echo "<th> ID </th>";
	echo "<th> NAME </th>";
	echo "<th> BRANCH </th>";
	echo "<th> SALARY </th>";
	echo "<th> SALARY </th>";
	
	echo "</tr>";
foreach($emp as $a){
	
	echo "<tr>";
foreach($a as $b){
	echo "<td> $b </td>";
}
echo "</tr>";
}
?>