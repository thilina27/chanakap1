<?php
    include("conect.php");

echo "<br>";

$db=mysql_select_db("cs2015g4",$con);

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

while ($row=mysql_fetch_assoc($retval)) {
	echo "stu ID:{$row['stuId']} <br>".
	"csc1122:{$row['csc1122']} <br>".
	"csc1113:{$row['csc1113']} <br>".
	"csc113a:{$row['csc113a']} <br>".
	"csc1142:{$row['csc1142']} <br>".
	"csc1153:{$row['csc1153']} <br>".
	"csc1213:{$row['csc1213']} <br>".
	"csc1223:{$row['csc1223']} <br>".
	"csc1233:{$row['csc1233']} <br>".
	"csc1242:{$row['csc1242']} <br>".
	"csc1251:{$row['csc1251']} <br>".
	"csc2113:{$row['csc2113']} <br>".
	"csc2123:{$row['csc2123']} <br>".
	"csc2133:{$row['csc2133']} <br>".
	"csc2143:{$row['csc2143']} <br>".
	"csc2213:{$row['csc2213']} <br>".
	"csc2233:{$row['csc2233']} <br>".
	"csc2242:{$row['csc2242']} <br>".
	"csc2252:{$row['csc2252']} <br>".
	"csc2263:{$row['csc2263']} <br>".
	"csc2222:{$row['csc2222']} <br>".
	"csc2272:{$row['csc2272']} <br>";
    

}


	function writeMsg($x) {
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
        else $y=0;    

	}

    function asignRank(){
        
	 switch ($subject_code) {
         case csc1122:  
         $y1 = writeMsg($result);
         break;
         
         case csc1113:
         $y2 = writeMsg($result);
         break;

         case csc113a:
         $y3 = writeMsg($result);
         break;
         
         case csc1124:
         $y4 = writeMsg($result);
         break;
         
         case csc1153:
         $y5 = writeMsg($result);
         break;
         
         case csc1213:
         $y6 = writeMsg($result);
         break;
         
         case csc1223:
         $y7 = writeMsg($result);
         break;
         
         case csc1233:
         $y8 = writeMsg($result);
         break;
         
         case csc1242:
         $y9 = writeMsg($result);
         break;
         
         case csc1251:
         $y10 = writeMsg($result);
         break;
         
         case csc2113:
         $y11 = writeMsg($result);
         break;
         
         case csc2123:
         $y12= writeMsg($result);
         break;
         
         case csc2133:
         $y13 = writeMsg($result);
         break;
         
         case csc2143:
         $y14 = writeMsg($result);
         break;
         
         case csc2213:
         $y15 = writeMsg($result);
         break;
         
         case csc2233:
         $y16 = writeMsg($result);
         break;
         
         case csc2242:
         $y17 = writeMsg($result);
         break;
         
         case csc2252:
         $y18 = writeMsg($result);
         break;
         
         case csc2263:
         $y19 = writeMsg($result);
         break;
         
         case csc2222:
         $y20 = writeMsg($result);
         break;
         
         case csc2272:
         $y21 = writeMsg($result);
         break;
         
         default:
         $y22=0;
         
     }/*end switch*/
        
    }//end function

         $srank = $y1+$y2+$y3+$y4+$y5+$y6+$y7+$y8+$y9+$y10+$y11+$y12+$y13+$y14+$y15+$y16+$y17+$y18+$y19+$y20+$y21;
         
         echo $rank;
	 
	
	$query = mysql_query("INSERT INTO stu_rank_overall (stuId, rank_overall) VALUES('stuId', $rank)");
		
?>
