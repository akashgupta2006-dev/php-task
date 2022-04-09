<?php
// wap in php to show raw strings

echo 'This is a simple raw string 1';
echo PHP_EOL;
echo "This is a simple raw string 2"; 
echo PHP_EOL;

//escape sequence
echo 'this is a \t tabbed \n line';
echo PHP_EOL;
echo "this is a \t tabbed \n line";

// with variable
$name='ravi';
$class='Btech';
$rollno='1001';
echo PHP_EOL;
echo'name=$name, class=$class, rollno= $rollno, inside single code';
echo PHP_EOL;
echo"name=$name, class=$class, rollno= $rollno, inside double code";
?>