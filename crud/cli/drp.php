<?php
include __DIR__.'/dbconnect.php';

$sql="drop table akash";
mysqli_query($conn,$sql);
?>