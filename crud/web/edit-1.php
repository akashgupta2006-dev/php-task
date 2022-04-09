<!DOCTYPE html>
<?php 
include_once __DIR__ ."/functions.php"; 
include_once __DIR__ .'/query-builder/Query.php';

$id=get('id');
if(!empty($id)){
	$query=new Query();
	$record=$query->select('*')->table('emp')->where('id',$id)->first();
}
?>

<html>
<head>
<style>
</style>
</head>
<body>
<form action="<?php echo url("UpdateHandler.php"); ?>" method="post">
Name : 
<input type="text" name="name" placeholder="Enter the name" value="<?php echo $record->name; ?>"/><br/><br/>
<input type="hidden" name="id" value="<?php echo $record->id; ?>"/>
Email : 
<input type="text" name="email" placeholder="Enter the email"/ value="<?php echo $record->email; ?>"><br/><br/>
<input type="submit" value="update" name="save"/>
</body>
</html>