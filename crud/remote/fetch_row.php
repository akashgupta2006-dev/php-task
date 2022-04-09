<?php
#step1 : make connection
include __DIR__.'/dbconnect.php';
require __DIR__.'/vendor/autoload.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
->addheader('SR No.')
->addheader('Id')
->addheader('Name')
->addheader('Email');

#step2 : prepare the query

$sql = "SELECT * from emp";
#step 3 execeute the queri on the fire the query
$result_set = mysqli_query($conn,$sql);
if(mysqli_num_rows($result_set)>0){
$data=[];
while($row=mysqli_fetch_row($result_set)){
$data[] = $row;
}
}
else if(mysqli_num_rows($result_set)==0){
echo "no record found";
}
else{
echo "error".mysqli_query_error($conn);
}
$i=1;
foreach($data as $row){
	$table ->addRow()
	->addColumn($i)
	->addColumn($row[0])
	->addColumn($row[1])
	->addColumn($row[2]);
	$i++;
}
$table->display();
	