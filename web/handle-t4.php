<?php
$user=$_REQUEST["ui"];
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$pass=$_REQUEST["pass"];
$num=$_REQUEST["num"];
printf("User Name: %s",$user);
printf("<br/>Name : %s",$name);
printf("<br/>E-mail : %s",$email);
printf("<br/>Password: %s",$pass);
printf("<br/>Number: %d",$num);
?>