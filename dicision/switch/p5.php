<?php
// wap in php to show consonant adn vowels

$x=readline("Enter the charecter :");
(getType($x=='string') and strlen($x)==1 and ctype_alpha($x))?:exit('invalid value supplied');

$output='';
switch(strtolower($x)){
	case 'a':
		$output='vowel';
		break;
	case 'e':
		$output='vowel';
		break;
	case 'i':
		$output='vowel';
		break;
	case 'o':
		$output='vowel';
		break;
	case 'u':
		$output='vowel';
		break;	
	default:
		$output='consonant';
		break;
}
echo $output;	
?>