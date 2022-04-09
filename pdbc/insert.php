<?php
#step1 : make connection 
include __DIR__.'/dbconnect.php';

#step 2 : prepare  the query
$name  = readline('Enter the name : ');
$email  = readline('Enter the email : ');

$sql = "INSERT INTO emp(name,email) values('{$name}','{$email}');";

#step3 : Execute the query or fire the query
if(mysqli_query($conn,$sql)){
	echo 'record Inserted with pk = '.mysqli_insert_id($conn);
}else{
	echo 'Inserted Error'.mysqli_error($conn);
}


?>