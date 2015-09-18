<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword ="";

$con =mysql_connect($dbhost, $dbuser, $dbpassword); 

if(!$con)
{
	die('not connected:'. mysql_error());
}
else
{
	echo "database connected"; 
}

?>
