<?php
ob_clean();
//print_r($_server);
$conn = mysqli_connect(
	$_SERVER['DB_HOST'],
	$_SERVER['DB_USER'],
	$_SERVER['DB_PASSWORD'],
	$_SERVER['DB_NAME']
	);
	print_r($conn);
	exit();
	

?>