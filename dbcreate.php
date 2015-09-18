<?php
include ("conect.php");

echo "<br>";

$new =mysql_query("create database cs2015g4",$con);

if(!$new){
	echo("Not created db").mysql_error();
	
}
else {
	echo "Created db";
}

?>