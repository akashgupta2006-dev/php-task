<?php
// wap in php to show . how to handle associative array using foreach
$data=[
[
'id'=>'1',
'name'=>'Akash',
'class'=>'cs',
],

[
'id'=>'2',
'name'=>'sandeep',
'class'=>'12th',
],
[
'id'=>'3',
'name'=>'reetesh',
'class'=>'it',
],
];
foreach($data as $user){
	echo "--------------------- \n";
	echo "user id = {$user['id']} \n";
	echo "user name = {$user['name']} \n";
	echo "user class = {$user['class']} \n";
		echo "--------------------- \n";
}
?>