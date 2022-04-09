<?php
#step1 : make connection
include __DIR__.'/dbconnect.php';
require __DIR__.'/vender/autoload.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
->addheader('SR No.')
->addheader('Id')
->addheader('Name')
->addheader('Email')

#step2 : prepare the query

$sql = "SELECT * from emp";
#step 3 execeute the queri on the fire the query
$result_set=mysqli_query($conn,$sql);
if(mysqli_num_rows($result_set)>0){
	$data = [];
	while($row=mysqli_fetch_assoc($result_set)){
	$data[]=$row;
	}
}else if(mysqli_num_rows($result_set)==0){
	echo 'No Record Found';
}else{
	echo 'Inserted Error'.mysqli_error($conn);
}
$i=1;
foreach($data as $row){
	$table->addRow()
	->addColumn($i)
	->addColumn($row['id'])
	->addColumn($row['name'])
?>