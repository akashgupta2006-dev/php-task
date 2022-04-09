<?php
// wap in php to show boolian false stotred in variable

$x=false;
echo $x;// nothing
echo PHP_EOL;
echo getType($x); // boolian
echo PHP_EOL;
var_dump($x);  // bool 
echo PHP_EOL;
echo json_encode($x);  // raw formate

echo 'on comparing the values:';
echo (false==False);
echo PHP_EOL;
echo (false==FALSE);
echo PHP_EOL;
var_dump(0==FALSE);
echo PHP_EOL;
var_dump(0==false); //type is optional match
echo PHP_EOL;
var_dump(0===false); //content match and type match = false

printf("%s","AKASH");
echo PHP_EOL;
printf("%d",10);
echo PHP_EOL;
printf("%d",1);
echo PHP_EOL;
printf("%b",true);
echo PHP_EOL;
printf("%d",true);

echo PHP_EOL;
printf("%b",true);
echo PHP_EOL;
printf("%s",'');
echo PHP_EOL;
printf("%s",false);
echo PHP_EOL;
printf("%s",json_encode(false));
echo PHP_EOL;
printf("%b",false);
echo PHP_EOL;
printf("%d",false);
echo PHP_EOL;
?>