<?php
include __DIR__.'/dbconnect.php';

$sql="create table akash(name varchar(50), email varchar(50));";
mysqli_query($conn,$sql);
?>