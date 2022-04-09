<?php
// wap in php to show total predefined costant in php

$count = count(get_defined_constants());
printf('The total Constant = %d',$count);

print_r (get_defined_constants());
?>