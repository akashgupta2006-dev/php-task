<?php
$emp=[
	[1,"Akash","CS",2000],
	[2,"shiv","CS",3000],
	[3,"sandeep","CS",4000],
	[5,"vipin","CS",5000],
	[6,"sudhir","CS",5000],
	[7,"Reetesh","CS",5000],
	[8,"sudhir","CS",5000]

];
echo "<table border='2px'>";
echo "<tr>";
	echo "<th> ID </th>";
	echo "<th> NAME </th>";
	echo "<th> BRANCH </th>";
	echo "<th> SALARY </th>";
	
	echo "</tr>";
for($row=0;$row<4;$row++){
echo "<tr>";
for($col=0;$col<4;$col++){
	echo "<td>". $emp[$row][$col]."</td>";
}
echo "</tr>";
}
echo "</table>";
?>