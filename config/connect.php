<?php 
$connection = mysql_connect('','','');
if(!$connection){
	echo "Error: Unable to connect to MyySQL" . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}

?>