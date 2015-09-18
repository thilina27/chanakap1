<?php
    include("conect.php");

echo "<br>";

$db=mysql_select_db("cs2015g4",$con);

$y25=" create table srank_overaal( stuId varchar(20)primary key, rank int)";

$x25=mysql_query($y25,$con);

if(!$x25){

	echo("not create table 1").mysql_error();
}
else {
	echo "Table 25 create sucsses";
}
?>