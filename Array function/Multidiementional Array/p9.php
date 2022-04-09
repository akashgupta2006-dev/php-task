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

foreach($marks as $key => $v1){
	echo $key . " : ";
	echo "<tr>";
	foreach($v1 as $key => $v2){
	echo $key;
	}
	echo "</br>";
}
echo "<pre>";
print_r($marks);
echo "</pre>";
?>