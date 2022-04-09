<?php
echo 'This is Akash gupta terminal  here';
echo PHP_EOL;
echo 'The Akash Framework : Version 1.x';
echo PHP_EOL;
$commands=[
'--help' => 'This is help command',
'--s'=>'for substraction',
'--m'=>'for multiplication',
'--d'=>'for division',
'--r'=>'for reminder',
];
echo PHP_EOL;
forEach($commands as $key => $value)
{
printf("%s\t:\t%s\n",$key,$value);
}
$output='';
if(isset($argv[1]))
{
$command=$argv[1];
echo "\e[H\e[J";
switch($command)
{
			case '--s':
		$x = readline('Enter The first Number : ');
		$y = readline('Enter the Second number : ');
		$output=$x-$y;
		break;
		
		case '--m':
		$x = readline('Enter The first Number : ');
		$y = readline('Enter the Second number : ');
		$output=$x*$y;
		break;
		
		case '--d':
		$x = readline('Enter The first Number : ');
		$y = readline('Enter the Second number : ');
		$output=$x/$y;
		break;
		
		case '--r':
		$x = readline('Enter The first Number : ');
		$y = readline('Enter the Second number : ');
		$output=$x%$y;
		break;
		
	default:
		$output='Invalid Command Supplied';
		break;
		}
		}
		echo $output;
?>








