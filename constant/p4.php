<?php

// wap in php to show non-case sensitive constant

define('gravity',10);
echo gravity;
echo PHP_EOL;

define ('GRAVITY',9.8);
echo GRAVITY;
// REDEFINE
echo PHP_EOL;
printf("the value of predefine constant true :%d \n",TRUE);
define('TRUE','yes');
printf("The value of pre-defined constant gravity : %d \n",TRUE); // E_notice Error
printf("The value of user-defined constant gravity : %d \n",gravity);
define('gravity',9.8);
printf("The value of user define consatant gravity : %d \n",gravity);
?>