<?php
//scanner function 
function input($msg='')

{
if($msg==''){
exit('massage is required');

}	
echo $msg;
$input= fgets(STDIN,1024);

return trim($input);	
}

?>