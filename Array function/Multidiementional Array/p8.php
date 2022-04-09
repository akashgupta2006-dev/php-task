<?php
$marks = [
	"budhani"=>[
		"physics"=>65,
		"maths"=>86,
		"chemestry"=>89
	],
	"godhni"=>[
		"physics"=>70,
		"maths"=>80,
		"chemestry"=>75
	],
	"modhni"=>[
		"physics"=>55,
		"maths"=>76,
		"chemestry"=>79
	],
];
echo "<table border=1 >";
echo "<tr>";
echo "<th>Student Name</th>";
echo "<th>Physics</th>";
echo "<th>Maths</th>";
echo "<th>Chemistry</th>";
echo "</tr>";
foreach($marks as $key => $v1){
	
	echo "<tr>
		<td>$key</td>";
	foreach($v1 as $v2){
	echo "<td> $v2 </td>";
	}
	echo "</tr>";
}
echo "</table>";
echo "<pre>";
print_r($marks);
echo "</pre>";
?>