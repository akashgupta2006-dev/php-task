<?php
$name = 'Rahul Jaiswal';
echo $name;
echo PHP_EOL;
printf("the length of the name is = %d",strlen($name));

$clean_name=trim($name);
echo PHP_EOL;
echo $clean_name;
printf("The length of the name is = %d",strlen($clean_name));
?>