<?php
include_once __DIR__."/functions.php";
include_once __DIR__."/query-builder/Query.php";
$name=post('name');
$email=post('email');
$id=post('id');
//echo $name;
//echo $email;
$query = new Query();
if($query->update('akashg',[
"name"=>$name,
"email"=>$email,

])->where('id',$id)->commit())
{
	header("Location:".url('Show.php?status=record-updated'));
}
else{
	echo "Update Error...";
}
?>