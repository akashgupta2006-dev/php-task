<?php
$emp=[
	["name"=>"aksah","branch"=>["cs","EL"]],
	["name"=>"Reetesh","branch"=>["mE"=>["mE1"=>1,"mE2"=>2],"cs"=>["IT"=>3,"IT2"=>2]]]
];
echo $emp[1]["branch"]["cs"]["IT2"];