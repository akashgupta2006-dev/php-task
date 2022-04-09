<?php
// wap in php to ,show different B/W raw and process in the combination 
// escape charecter sequence

#echo '''' ; // inavlid
#echo '''' ; // inavlid

echo 'The line is \n single tabbed and "\t double" tabbed.';
echo PHP_EOL;
echo "The line is \n single tabbed and '\t double' tabbed.";

//with variable
echo PHP_EOL;
$a=100;
echo 'The value of $a is: "$a"';
echo PHP_EOL;
echo "The value of $a is: '$a'";
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo 'The value of $a is: '.$a;
echo PHP_EOL;
echo 'The value of $a is: "'.$a.'"';
echo PHP_EOL;
echo 'The value of $a is: '."'$a'";
?>

