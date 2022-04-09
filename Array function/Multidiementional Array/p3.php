<?php
$emp=[
	[1,"Akash","CS",2000],
	[2,"shiv","CS",3000],
	[3,"sandeep","CS",4000],
	[4,"vipin","CS",5000]

];
echo "<table border='2px' >";
echo "<tr>";
	echo "<th> ID </th>";
	echo "<th> NAME </th>";
	echo "<th> BRANCH </th>";
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