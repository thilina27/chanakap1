<?php
    include("conect.php");

echo "<br>";

//Connect DB cs2015g4
$db=mysql_select_db("cs2015g4",$con);

//create table if not exist -- can be remove in future 
$y25=" CREATE TABLE IF NOT EXISTS stu_rank_overall( stuId varchar(20)primary key, rank_overall int)";
$x25=mysql_query($y25,$con);


if(!$x25){

	echo("not create table 25").mysql_error();
}
else {
	echo "Table 25 create sucsses";
}


mysql_select_db('cs2015g4');

$subject_code=("SELECT stuId, csc1122, csc1113, csc113a, csc1142, csc1153, 
					csc1213, csc1223, csc1233, csc1242, 
					csc1251, csc2113, csc2123, csc2133, 
					csc2143,csc2213,csc2233,csc2242,
					csc2252,csc2263,csc2222,csc2272 FROM student");

$retval=mysql_query($subject_code,$con);

if(! $retval)
{
	die('Could not get data:'.mysql_error());
}

//set over role rank for each student 
while ($row=mysql_fetch_assoc($retval)) {
  
	$y1=rankValue($row['csc1122']);
	$y2=rankValue($row['csc1113']);
	$y3=rankValue($row['csc113a']);
	$y4=rankValue($row['csc1142']);
	$y5=rankValue($row['csc1153']);
	$y6=rankValue($row['csc1213']);
	$y7=rankValue($row['csc1223']);
	$y8=rankValue($row['csc1233']);
	$y9=rankValue($row['csc1242']);
	$y10=rankValue($row['csc1251']);
	$y11=rankValue($row['csc2113']);
	$y12=rankValue($row['csc2123']);
	$y13=rankValue($row['csc2133']);
	$y14=rankValue($row['csc2143']);
	$y15=rankValue($row['csc2213']);
	$y16=rankValue($row['csc2233']);
	$y17=rankValue($row['csc2242']);
	$y18=rankValue($row['csc2252']);
	$y19=rankValue($row['csc2263']);
	$y20=rankValue($row['csc2222']);
	$y21=rankValue($row['csc2272']);

	$rank = $y1+$y2+$y3+$y4+$y5+$y6+$y7+$y8+$y9+$y10+$y11+$y12+$y13+$y14+$y15+$y16+$y17+$y18+$y19+$y20+$y21;
	$stuId= $row['stuId'];
	$query = mysql_query("INSERT INTO stu_rank_overall (stuId, rank_overall) VALUES('$stuId', $rank)");
}

//find rank for each subject 
	function rankValue($x) {
		if($x=='A+'){
			return $y=10;
		}elseif($x=='A'){
			return $y=9;
		}elseif($x=='A-'){
			return $y=8;
		}elseif($x=='B+'){
			return $y=7;
		}elseif($x=='B'){
			return $y=6;
		}elseif($x=='B-'){
			return $y=5;
		}elseif($x=='C+'){
			return $y=4;
		}elseif($x=='C'){
			return $y=3;
		}elseif($x=='C-'){
			return $y=2;
		}elseif($x=='D+'){
			return $y=1;
        }elseif($x=='D'){
			return $y=0;
		}
        else {
			return $y=0;    
		}
	}
		
?>
