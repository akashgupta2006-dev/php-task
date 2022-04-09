<?php
$data = array(

'name'=>'AKASH GUPTA',
'class'=>'DIPLOMA',
'rollno'=>1001,
);

echo <<<'FORM'
<h1>Student Form</h1>
<hr/>
<form>
 <p>
	name :<input type="text" value="{$data['name']}">
	</p>
	<p>
	class :<input type="text" value="{$data['class']}">
	</p>
	<p>
	Rollno :<input type="text" value="{$data['rollno']}">
	</p>
	</form>
FORM;	
?>