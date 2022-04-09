<?php
// wap in php to show sort
$a = ['10'=>'a','100'=>'c','5'=>'b'];
print_r($a);
asort($a);
print_r($a);
arsort($a);
print_r($a);
?>