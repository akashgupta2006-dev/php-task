<?php
$radius=$_REQUEST["rad"];
$area=(3.14*($radius*$radius));
$circumference=(3.14*(2*$radius));
printf("Area of Circle : %.2f",$area);
printf("<br/>Circumferenc of Circle : %.2f",$circumference);


?>