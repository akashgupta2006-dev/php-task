<?php
include_once __DIR__ ."/query-builder/Query.php";
include_once __DIR__ ."/functions.php";

$name=post('name');
$email=post('email');

$query = new Query();
if(query->insert('akashg',[
	"name"=>$name,
	"email"=>$email,
])) 
{
	echo "insert data with PK = ".$query->getId();
}
else
{
	echo "Inserted Error";
}


?>