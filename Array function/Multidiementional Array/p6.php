<?php
$emp=array(
	array(1,"Akash","CS",2000,1),
	array(2,"shiv","CS",3000,1),
	array(3,"sandeep","CS",4000,1),
	array(4,"vipin","CS",5000,1),
	array(5,"reetesh","CS",5000,1),
	array(6,"reetesh","CS",5000,1),
	array(7,"reetesh","CS",5000,1),
	array(8,"sudhir","CS",5000,1)
);
echo "<pre>";
//print_r ($emp);

// echo $emp[0][0];
// echo $emp[0][1];
// echo $emp[0][2];
// echo $emp[0][3];
echo "<table border=1px width=450px;>";
echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>name</th>";
	echo "<th>Branch</th>";
	echo "<th>SALARY</th>";
	echo "<th>status</th>";
	
	echo "</tr>";
foreach($emp as $a)
{
	echo "<tr>";
	foreach($a as $b)
	{
	echo "<td>$b</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>